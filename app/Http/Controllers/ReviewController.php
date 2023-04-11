<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function add(Request $request){
        Review::create([
            'product_id'=>$request->input('product_id'),
            'user_id'=> Auth::guard('sanctum')->id(),
            'content'=>$request->input('content')
        ]);
        return redirect()->back();
    }
    public function baning($id){
        $review = Review::find($id);
        $review->update([
            'ban' => true,
        ]);

        return redirect()->back();
    }
    public function destroy($id){
        $review = Review::find($id);
        $review->delete();

        return redirect()->back();
    }
}
