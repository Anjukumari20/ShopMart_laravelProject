<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Product routes
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

// Authentication routes (excluding login and register)
Auth::routes(['login' => false, 'register' => false]);

// Custom authentication routes
Route::get('/login', [App\Http\Controllers\Auth\CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\CustomLoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\CustomLoginController::class, 'logout'])->name('logout');

// Custom registration routes
Route::get('/register', [App\Http\Controllers\Auth\CustomRegisterController::class, 'showRegistrationForm'])->name('custom.register');
Route::post('/custom-register', [App\Http\Controllers\Auth\CustomRegisterController::class, 'register'])->name('custom.register.submit');

// Cart routes (requires authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/{id}', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
    Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');

    // Order routes
    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');

    // Payment routes
    Route::get('/payment/{orderId}/process', [App\Http\Controllers\PaymentController::class, 'process'])->name('payment.process');
    Route::post('/payment/{orderId}/complete', [App\Http\Controllers\PaymentController::class, 'complete'])->name('payment.complete');
    Route::get('/payment/{orderId}/success', [App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');
    Route::get('/payment/cancel', [App\Http\Controllers\PaymentController::class, 'cancel'])->name('payment.cancel');
});

// Admin routes (requires authentication)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Admin Product routes
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);

    // Admin Category routes
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);

    // Admin Order routes
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class);
});
