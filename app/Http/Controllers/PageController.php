<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function all(){
        $products = Product::all();
        return view('welcome',compact('products'));
    }
    public function login(){
        return view('login');
    }
    public function index($product){
        $product = new ProductResource(Product::find($product));
        return view('open_product', compact('product'));
    }
    public function register(){
        return view('register');
    }
    public function admin(){
        return view('admin');
    }
    public function product($id){
        return view('open_product');
    }
}
