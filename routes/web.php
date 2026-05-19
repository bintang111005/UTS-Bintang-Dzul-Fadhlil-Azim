<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categories', CategoryController::class);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/insert', [ProductController::class, 'insert']);
Route::get('/update/{id}', [ProductController::class, 'update']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);
Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');
Route::post('/products', [ProductController::class, 'store'])
    ->name('products.store');
Route::put('/products/{id}', [ProductController::class, 'update'])
    ->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
    ->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])
    ->name('products.update');