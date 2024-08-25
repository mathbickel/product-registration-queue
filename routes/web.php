<?php

use Illuminate\Support\Facades\Route;
use App\Product\Controller\ProductController;

// Route::group(['prefix' => 'products'], function () {
//     Route::get('/', [ProductController::class, 'index'])->name('products.index');
// });
Route::get('/products', [ProductController::class, 'index'])->name('products.index');