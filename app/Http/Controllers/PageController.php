<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function all()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    public function main($mode)
    {
        if ($mode == 'price') {
            $products = DB::table('products')->orderBy('price')->get();
            return view('index', compact('products'));
        } elseif ($mode == 'category') {
            $products = DB::table('products')->orderBy('category')->get();
            return  view('index', compact('products'));
        } else {
            $products = Product::all();
            return view('welcome', compact('products'));
        }
    }
    public function login()
    {
        return view('login');
    }
    public function index($product)
    {
        $product = new ProductResource(Product::find($product));
        return view('open_product', compact('product'));
    }
    public function register()
    {
        return view('register');
    }
    public function admin()
    {
        $orders = new OrderResource(Order::all()->where('status', '!=', true));
        return view('admin', compact('orders'));
    }
    public function product($id)
    {
        return view('open_product');
    }
    public function profile()
    {
        $orders = new OrderResource(Order::all()->where('user_id', Auth::guard('sanctum')->id()));
        return view('profile', compact('orders'));
    }
    public function ban(){
        return view('ban');
    }
}
