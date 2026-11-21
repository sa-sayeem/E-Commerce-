<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;


// CUSTOMER WEBSITE

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

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.send');


// ADMIN ROUTES

Route::prefix('admin')->name('admin.')->group(function () {

    // Login
    Route::middleware('guest:admin')->group(function () {

        Route::get('/login', [AuthController::class, 'showLogin'])
            ->name('login');

        Route::post('/login', [AuthController::class, 'login'])
            ->name('login.submit');
    });

    // Protected Pages
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/products', function () {
            return view('admin.placeholder', [
                'heading' => 'Products Management'
            ]);
        })->name('products');

        Route::get('/orders', function () {
            return view('admin.placeholder', [
                'heading' => 'Orders Management'
            ]);
        })->name('orders');

        Route::get('/customers', function () {
            return view('admin.placeholder', [
                'heading' => 'Customers Management'
            ]);
        })->name('customers');

        Route::get('/messages', function () {
            return view('admin.placeholder', [
                'heading' => 'Messages Management'
            ]);
        })->name('messages');

        Route::get('/settings', function () {
            return view('admin.placeholder', [
                'heading' => 'Admin Settings'
            ]);
        })->name('settings');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');
    });

});
