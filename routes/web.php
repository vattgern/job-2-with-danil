<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Routing\RouteGroup;
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

Route::middleware('authchek')->group(function () {
    Route::get('/profile', [PageController::class, 'profile']);
    Route::post('/add_review', [ReviewController::class, 'add'])->name('add_review');
    Route::post('/order', [OrderController::class, 'store']);
    Route::delete('/order/delete', [OrderController::class, 'destroy']);
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
    Route::patch('/reviews/{id}', [ReviewController::class, 'update']);
});

Route::middleware('adminchek')->group(function () {
    Route::get('/admin', [PageController::class, 'admin'])->name('admin');
    Route::post('/add_product', [ProductController::class, 'add_product'])->name('add_product');
    Route::post('/product', [ProductController::class, 'store']);
    Route::post('/order/accept', [OrderController::class, 'accept']);
    Route::patch('/admin/reviews/{id}', [ReviewController::class, 'baning']);
    Route::patch('/admin/ban/add/{id}', [BanController::class, 'addBan']);
    Route::patch('/admin/ban/remove/{id}', [BanController::class, 'removeBan']);
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy']);
    Route::patch('/admin/product/update', [ProductController::class, 'update']);

    Route::get('/product/update/{id}', [PageController::class, 'editProduct']);
});

Route::get('/', [PageController::class, 'all']);
Route::get('/main/{mode}', [PageController::class, 'main']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/signIn', [AuthController::class, 'signIn'])->name('login');
Route::get('/register', [PageController::class, 'register']);
Route::post('/registeration', [AuthController::class, 'signUp'])->name('registeration');
Route::get('/products/{product}', [PageController::class, 'index']);
Route::get('/ban', [PageController::class, 'ban']);
Route::get('/catalog', [PageController::class, 'catalog']);
Route::get('/logout', [AuthController::class, 'logout']);
