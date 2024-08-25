<?php

use Illuminate\Support\Facades\Route;
use App\Product\Controller\ProductController;

Route::group(['prefix' => 'products'], function () {
    Route::get('/all', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [ProductController::class, 'getById'])->name('products.getById');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});