<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\HomeController;
use App\Http\Controllers\BackEnd\ProductsController;
use App\Http\Controllers\BackEnd\BrandsController;

Route::get('/',[HomeController::class, 'index'])->name('home');
/// admin
Route::resource('products', ProductsController::class);

Route::resource('brands', BrandsController::class);
///

Route::get('brands/data', [BrandsController::class, 'getData'])->name('brands.data');
