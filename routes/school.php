<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolPanel\LoginController;

Route::get('/', function () {
    return view('app_layout.school.school_panel');
});
Route::prefix('school')->group(function () {
    Route::get('login', [LoginController::class, 'LoginShow'])->name('school.login');
    Route::post('login', [LoginController::class, 'Login'])->name('school.login.form');
});
