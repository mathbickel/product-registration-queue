<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariationsController;


Route::group(['prefix' => 'products'], function () {
    Route::get('/all', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [ProductController::class, 'getById'])->name('products.getById');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::group(['prefix' => 'variations'], function () {
    Route::get('/all', [VariationsController::class, 'index'])->name('variations.index');
    Route::get('/{id}', [VariationsController::class, 'getById'])->name('variations.getById');
    Route::post('/store', [VariationsController::class, 'store'])->name('variations.store');
    Route::put('/update/{id}', [VariationsController::class, 'update'])->name('variations.update');
    Route::delete('/{id}', [VariationsController::class, 'destroy'])->name('variations.destroy');   
});