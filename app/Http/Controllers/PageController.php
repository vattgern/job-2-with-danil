<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function all()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    public function main($mode){
        if($mode == 'price'){
            $products = DB::table('products')->orderBy('price')->get();
            return view('index',compact('products'));
        } elseif ($mode == 'category'){
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
        return view('admin');
    }
    public function product($id)
    {
        return view('open_product');
    }
    public function profile()
    {
        return view('profile');
    }
}
