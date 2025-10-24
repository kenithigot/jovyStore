<?php

use Illuminate\Support\Facades\Route;

// ========== User & Authentication Controller ==========
use App\Http\Controllers\TestingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// ========== Management Controller ==========
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\SettingsController;

Route::view('/', 'home')->name('home');

Route::middleware(['guest'])->group(function () {

    // Sign In route
    Route::get('/signin', [LoginController::class, 'userLoginIndex'])->name('userLoginIndex');
    Route::post('/signin', [LoginController::class, 'userSignin'])->name('userSignin');

    // Register User Grouping Route
    Route::prefix('register')->name('register.')->group(function () {

        // Sign Up route
        Route::get('/', [RegisterUserController::class, 'showRegistrationForm'])->name('showRegistrationForm');
        Route::post('/', [RegisterUserController::class, 'registration'])->name('registration');

        //Register account verification route
        Route::get('/verification', [RegisterUserController::class, 'registerVerification'])->name('registerVerification');
        Route::post('/verification', [RegisterUserController::class, 'verifyConfirm'])->name('verifyConfirm');
    });

    // Forgot Password Grouping Route
    Route::prefix('forgot-password')->name('forgot-password.')->group(function () {

        // Forgot Password Route
        Route::get('/', [ForgotPasswordController::class, 'forgotindex'])->name('forgotindex');
        Route::post('/', [ForgotPasswordController::class, 'forgotSend'])->name('forgotSend');

        // Forgot Password Verification
        Route::get('/verification/email/{email}', [ForgotPasswordController::class, 'verificationIndex'])->name('verificationIndex');
        Route::post('/verification/email/{email}', [ForgotPasswordController::class, 'verificationSend'])->name('verificationSend');

        // Reset Password/Confirm Password route
        Route::get('/reset-password/email/{email}', [ForgotPasswordController::class, 'resetPasswordIndex'])->name('resetPasswordIndex');
        Route::post('/reset-password/email/{email}', [ForgotPasswordController::class, 'resetPasswordSend'])->name('resetPasswordSend');

    });

    // Route::view('/signin/successful', 'auth.loginSuccess')->name('loginSuccess');
});

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'admin.index')->name('index');

    // Product Routes
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/add', [ProductController::class, 'add'])->name('add');
    });

    // Order Routes
    Route::prefix('order')->name('order.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
    });

    // Customer Routes
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('index');
    });

    // Report Routes
    Route::prefix('report')->name('report.')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('index');
    });

    // Messages Routes
    Route::prefix('messages')->name('messages.')->group(function () {
        Route::get('/', [MessagesController::class, 'index'])->name('index');
    });

    // Settings Routes
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('index');
    });

    Route::post('/logout', action: [LoginController::class, 'userLogout'])->name('userLogout');

});




