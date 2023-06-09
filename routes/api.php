<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\CustomUserController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\ProductController;
use App\http\Controllers\OrderController;
use App\http\Controllers\OrderItemController;
use App\http\Controllers\ReviewController;
use App\http\Controllers\PaymentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('users', CustomUserController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('order_items', OrderItemController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('payments', PaymentController::class);
