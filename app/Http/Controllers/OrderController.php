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
    public function destroy(Request $request)
    {
        $order = Order::find($request->input('order_id'));
        $contact = Contact::find($order->contact_id);

        $contact->delete();
        $order->delete();

        return redirect()->back();
    }

    public function accept(Request $request)
    {
        $order = Order::find($request->input('order_id'));

        $order->where('id', $request->input('order_id'))->update([
            'status' => 1
        ]);
        return redirect('/admin#openModal');
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
