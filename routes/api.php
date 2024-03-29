<?php

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

Route::get('/', [App\Http\Controllers\AllproductController::class, 'index']);
//Route::match(['get', 'post'], '/payment', [App\Http\Controllers\PaymentController::class, 'store']);
Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'store']);
Route::post('/orderslist', [App\Http\Controllers\ViewOrderController::class, 'allOrders']);
Route::get('/orderslist/{userdetails}', [App\Http\Controllers\ViewOrderController::class, 'userOrder']);
Route::post('/confirmpayment', [App\Http\Controllers\PaymentController::class, 'verify']);

Route::post('/update', [App\Http\Controllers\PaymentController::class, 'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
