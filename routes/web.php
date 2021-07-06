<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
