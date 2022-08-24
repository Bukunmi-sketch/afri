<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//Route::get("/",[App\Http\Controllers\ProductController::class, 'index']);
/*
Route::post('/login', [App\Http\Controllers\ProductController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\ProductController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
*/

//Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, ''])->name('logout');

Route::get('/get', [App\Http\Controllers\AllproductController::class, 'index']);

Route::get('/products', [App\Http\Controllers\productController::class, 'getproducts'])->name('products');

Route::get('/create', [App\Http\Controllers\ProductController::class, 'index'])->name('create');
Route::post('/create', [App\Http\Controllers\ProductController::class, 'store'])->name('create');

Route::get('/edit', [App\Http\Controllers\ProductController::class, 'index'])->name('edit');
Route::post('/edit', [App\Http\Controllers\ProductController::class, 'store'])->name('edit');

Route::get('/categories', [App\Http\Controllers\ProductController::class, 'index'])->name('categories');
Route::post('/categories', [App\Http\Controllers\ProductController::class, 'store']);

Route::get('/delete', [App\Http\Controllers\ProductController::class, 'index'])->name('delete');
Route::delete('/delete/{productid}', [App\Http\Controllers\ProductController::class, 'destroy']);

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('orders');
Route::delete('/deleteOrders/{orderid}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/orderslist', [App\Http\Controllers\ViewOrderController::class, 'allOrders']);
Route::get('/orderslist/{userdetails}', [App\Http\Controllers\ViewOrderController::class, 'userOrder']);

Route::get('/test', [App\Http\Controllers\PaymentController::class, 'test']);

Route::get('/customers_details', [App\Http\Controllers\ProductController::class, 'index'])->name('customers_details');
Route::post('/customers_details', [App\Http\Controllers\ProductController::class, 'store'])->name('customers_details');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
/*
Route::match(['get', 'post'], '/pay', function () {
    return view('page.payment');
});

*/
//Route::match(['get', 'post'], '/pay', [App\Http\Controllers\PaymentController::class, 'index'])->name('pay');

