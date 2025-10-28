<?php

// ========== Authentication Controller ==========
use App\Http\Controllers\Auth\LoginController;
// ===============================================

// ========== Management Controller =============
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\SettingsController;
// ===============================================

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    // Route::view('/dashboard', 'admin.index')->name('index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

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

});
