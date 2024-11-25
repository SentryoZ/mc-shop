<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\Logout;
use App\Livewire\Products;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Register routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPost'])->name('register.post');

// Login routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Forgot password routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'index']);

// Logout route
Route::get('/logout', [Logout::class, 'index'])->name('logout');
Route::post('/logout', [Logout::class, 'logout'])->name('logout.post');

// Email handler
Route::controller(EmailVerificationController::class)->group(function () {
    Route::get('/email/verify', 'notice')
        ->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', 'verify')
        ->name('verification.verify');

    Route::post('/email/verification-notification', 'resend')
        ->name('verification.resend');
});

// Product routes

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/products', Products::class)->name('products');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/create', [ProductController::class, 'index'])->name('admin.products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
});
