<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

// CATEGORY ROUTE
Route::resource('categories', CategoryController::class);


// PRODUCT ROUTE
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

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

    Route::middleware(['auth.manual'])->group(function () {

    Route::resource('categories', CategoryController::class);

    Route::get('/products',
        [ProductController::class,'index']);
});