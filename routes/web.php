<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'all']);

Route::get('/login', [PageController::class, 'login']);
Route::post('/signIn', [AuthController::class, 'signIn'])->name('login');

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/registeration', [AuthController::class, 'signUp'])->name('registeration');


Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/products/{product}', [PageController::class, 'index']);
Route::post('/add_product', [ProductController::class, 'add_product'])->name('add_product');
Route::post('/product', [ProductController::class, 'store']);
Route::post('/add_review', [ReviewController::class, 'add'])->name('add_review');

Route::post('/order', [OrderController::class, 'store']);
