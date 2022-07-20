<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});



//Route::get("/",[App\Http\Controllers\ProductController::class, 'index']);
/*
Route::post('/login', [App\Http\Controllers\ProductController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\ProductController::class, 'index'])->name('login');

Route::post('/register', [App\Http\Controllers\ProductController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\ProductController::class, 'index'])->name('register');


Route::post('/logout', [App\Http\Controllers\ProductController::class, 'index'])->name('create');
*/
Route::get('/create', [App\Http\Controllers\ProductController::class, 'index'])->name('create');
Route::post('/create', [App\Http\Controllers\ProductController::class, 'store'])->name('create');

Route::get('/edit', [App\Http\Controllers\ProductController::class, 'index'])->name('edit');
Route::post('/edit', [App\Http\Controllers\ProductController::class, 'store'])->name('edit');

Route::get('/categories', [App\Http\Controllers\ProductController::class, 'index'])->name('categories');
Route::post('/categories', [App\Http\Controllers\ProductController::class, 'store'])->name('categories');

Route::get('/delete', [App\Http\Controllers\ProductController::class, 'index'])->name('delete');
Route::post('/delete', [App\Http\Controllers\ProductController::class, 'store'])->name('delete');

Route::get('/customers', [App\Http\Controllers\ProductController::class, 'index'])->name('customers');
Route::post('/customers', [App\Http\Controllers\ProductController::class, 'store'])->name('customers');

Route::get('/customers_details', [App\Http\Controllers\ProductController::class, 'index'])->name('customers_details');
Route::post('/customers_details', [App\Http\Controllers\ProductController::class, 'store'])->name('customers_details');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
