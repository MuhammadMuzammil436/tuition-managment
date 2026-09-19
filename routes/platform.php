<?php

use App\Http\Controllers\PlatformPanel\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('platform')->group(function () {
    Route::get('/login', [LoginController::class, 'LoginShow'])->name('platform.login.show');
    Route::post('/login', [LoginController::class, 'Login'])->name('platform.login.form');
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return 'Platform Dashboard';
        })->name('platform.dashboard');

        Route::get('/users', function () {
            return 'Platform Users';
        })->name('platform.users');

        Route::get('/roles', function () {
            return 'Platform Roles';
        })->name('platform.roles');
    });
});
