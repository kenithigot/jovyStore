<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProductController;

Route::view('/', 'home')->name('home');

Route::middleware(['guest'])->group(function () {

    // Sign In route
    Route::view('/signin', 'auth.signup')->name('signin');
    Route::view('/testSidebar', 'admin.dashboard')->name('dashboard');


    Route::get('/product', [ProductController::class, 'index'])->name('product');
});


