<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});


// =====================
// AUTH (LOGIN)
// =====================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// AUTH (REGISTER)
// =====================
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');


// =====================
// PROTECTED ROUTES (must login)
// =====================

Route::middleware('auth')->group(function () {

    // =====================
    // CATEGORY ROUTE
    // =====================

    Route::resource('categories', CategoryController::class);

    // =====================
    // PRODUCT ROUTE
    // =====================

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('/insert', [ProductController::class, 'insert']);

    Route::get('/delete/{id}', [ProductController::class, 'delete']);

    // CREATE
    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products', [ProductController::class, 'store'])
        ->name('products.store');

    // EDIT
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
        ->name('products.edit');

    // UPDATE
    Route::put('/products/{id}', [ProductController::class, 'update'])
        ->name('products.update');

});