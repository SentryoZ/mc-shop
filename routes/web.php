<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Register routes
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

// Email handler
Route::controller(EmailVerificationController::class)->group(function () {
    Route::get('/email/verify', 'notice')
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', 'verify')
        ->name('verification.verify');

    Route::post('/email/verification-notification', 'resend')
        ->name('verification.resend');
});

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Forgot password routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'index']);

// Logout route
Route::get('/logout', [Logout::class, 'index'])->name('logout');
Route::post('/logout', [Logout::class, 'logout'])->name('logout.post');
