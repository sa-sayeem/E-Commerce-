<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\CartController;



// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes');
Route::get('/clothes', [ShoeController::class, 'clothes'])->name('clothes');
Route::get('/about', [ShoeController::class, 'about'])->name('about');
Route::get('/contact', [ShoeController::class, 'contact'])->name('contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::post('/cart/update/{id}', [CartController::class, 'update'])
    ->name('cart.update');

