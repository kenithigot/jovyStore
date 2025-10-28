<?php
use App\Http\Controllers\User\DashboardController;

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('userIndex');
});