<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('/login', [PageController::class, 'login']);
Route::post('/signIn', [AuthController::class, 'signIn'])->name('login');

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/registeration', [AuthController::class, 'signUp'])->name('registeration');


Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/products/{id}', [PageController::class, 'product']);
Route::post('/add_product', [ProductController::class, 'add_product'])->name('add_product');
