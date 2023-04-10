<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(){
        return view('login');
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
