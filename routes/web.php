<?php

use App\Http\Controllers\ProductCatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductCatalogController::class,'index'])->name('home');
Route::get('data-product', [ProductCatalogController::class,'DataProduct'])->name('data-product');

