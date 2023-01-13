<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,'index'])->name('home');
Route::get('login-index',[AuthController::class,'index'])->name('login.index');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::get('add-product', [ProductController::class,'addProduct']);
Route::post('post-product', [ProductController::class,'postProduct'])->name('post.product');
Route::get('edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
Route::post('update-product/{id}', [ProductController::class,'updateProduct'])->name('update.product');
Route::get('delete-product/{id}', [ProductController::class,'deleteProduct'])->name('delete.product');
