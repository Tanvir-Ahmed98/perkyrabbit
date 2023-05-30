<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them wills
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/products', 'App\Http\Controllers\ProductController');
Route::resource('/stocks', 'App\Http\Controllers\StockController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

