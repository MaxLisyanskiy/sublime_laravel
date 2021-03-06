<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/category/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/cart', [CartController::class, 'index'])->name('cartIndex');

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
