<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function signUp(SignUpRequest $request)
    {
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ])){
            return redirect('login');
        }

        $img = $request->file('avatar');

        $path = Storage::disk('public')->put('avatars', $img);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'avatar' => '/storage/' . $path
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        Auth::login($user);

        return redirect('/');
    }
    public function signIn(SignInRequest $request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        if(!Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])){
            return redirect('login');
        }
        $user = Auth::guard('sanctum')->user();
        Auth::login($user);
        $token = $user->createToken('auth_token')->plainTextToken;

        if($user->administrator == true){
            return  redirect('/admin');
        }
        return redirect('/');
    }
    public function me(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'Данные о пол-ле',
            'content' => Auth::guard('sanctum')->user()
        ]);
    }
    public function logout(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        //Удаление токенов
        auth('sanctum')->user()->tokens()->delete();
        Auth::logout();
        // переход на страницу
        return redirect('/');
    }
}
