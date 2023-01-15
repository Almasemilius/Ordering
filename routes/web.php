<?php

use App\Http\Controllers\Blade\AuthController;
use App\Http\Controllers\Blade\OrderController;
use App\Http\Controllers\Blade\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });\

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('login-index', [AuthController::class, 'index'])->name('login.index');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register-index', [AuthController::class, 'registerIndex'])->name('register.index');
Route::post('register', [AuthController::class, 'register'])->name('register');



Route::middleware('auth')->group(function () {

    Route::get('order-product/{productId}', [OrderController::class, 'pressOrder'])->name('order.product');
    Route::get('confirm-order/{productId}', [OrderController::class, 'confirmOrder'])->name('confirm.order');
    Route::get('card-info/{productId}', [OrderController::class, 'cardInfo'])->name('card.info');
    Route::post('create-payment-method', [OrderController::class, 'createPaymentMethod'])->name('post.payment.method');
    Route::middleware('role')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct']);
        Route::post('post-product', [ProductController::class, 'postProduct'])->name('post.product');
        Route::get('edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
        Route::post('update-product/{id}', [ProductController::class, 'updateProduct'])->name('update.product');
        Route::get('delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete.product');
        Route::get('admin-products', [ProductController::class, 'adminProducts'])->name('admin.products');
    });
});
