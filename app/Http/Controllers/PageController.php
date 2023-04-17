<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ReviewResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
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
    public function ban()
    {
        return view('ban');
    }
    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('productEdit', compact('id', 'product'));
    }
    public function catalog($mode = null)
    {
        $products = [];
        if($mode == 'price'){
            $products = ProductResource::collection(DB::table('products')
                ->orderBy('price')
                ->get());
        } elseif ($mode == 'category') {
            $products = ProductResource::collection(DB::table('products')
                ->orderBy('category_id')
                ->get());
        } else {
            $products = Product::all();
        }
        return view('catalog', compact('products'));
    }
    public function reviewEdit($id, $product){
        $review = new ReviewResource(Review::find($id));
        return view('reviewEdit', compact('review', 'product'));
    }
}
