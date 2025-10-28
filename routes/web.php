<?php

use Illuminate\Support\Facades\Route;

// ========== User & Authentication Controller ==========
use App\Http\Controllers\TestingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::view('/', 'home')->name('home');

// Route::middleware(['role'])->group(function () {

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

Route::post('/logout', action: [LoginController::class, 'userLogout'])->name('userLogout');

// Route::view('/signin/successful', 'auth.loginSuccess')->name('loginSuccess');
// });


require __DIR__ . '/admin.php';
require __DIR__ . '/user.php';



