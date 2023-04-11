<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Contact;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function delete(Request $request)
    {
        Order::where('id', $request->input('id')->delete());
    }

    public function store(Request $request)
    {
        $contact = Contact::create([
            'address' => $request->input('address'),
            'tel' => $request->input('tel'),
            'questions' => $request->input('questions'),
            'email' => $request->input('email'),
            'fullName' => $request->input('fio'),
            'user_id' => Auth::guard('sanctum')->id()
        ]);
        Order::create([
            'user_id' => Auth::guard('sanctum')->id(),
            'contact_id' => $contact->id,
            'product_id' => $request->input('product_id'),
            'date_order' => $request->input('date_order')
        ]);
        return redirect()->back();
    }
}
