<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function add_product(ProductRequest $request){
        dd($request->all());
        $img = $request->file('image');

        $path = Storage::disk('public')->put('products', $img);
        Product::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'category' => 'что-то',
            'image' => '/storage/'.$path
        ]);
//        return redirect('/admin');
    }
    public function store(Request $request){
        $img = $request->file('image');

        $path = Storage::disk('public')->put('products', $img);
        Product::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'category' => 'что-то',
            'image' => '/storage/'.$path
        ]);
        return redirect('/admin');
    }
    public function update(Request $request){
        $product = Product::find($request->id);
        $path = $product->image;
        if($request->file('image')){
            $img = $request->file('image');
            $path = Storage::disk('public')->put('products', $img);
        }
        $product->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'category' => $request->input('category'),
            'image' => '/storage/' . $path
        ]);

        return redirect('/');
    }
    public function destroy($id){
        $product = Product::find($id);
        $reviews = Review::all()->where('product_id', $product->id);
        foreach ($reviews as $review){
            $review->delete();
        }
        $product->delete();

        return redirect()->back();
    }
}
