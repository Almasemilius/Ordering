<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('products',[ProductController::class,'getProducts']);
Route::post('products',[ProductController::class,'postProduct']);
Route::put('products/{id}',[ProductController::class,'editProduct']);
Route::delete('products/{id}',[ProductController::class,'deleteProduct']);
Route::post('users',[AuthController::class,'postUser']);
Route::get('users',[AuthController::class,'getUsers']);
Route::post('orders', [OrderController::class,'postOrder']);
Route::post('login', [AuthController::class,'login']);
