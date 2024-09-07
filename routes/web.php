<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', HomeController::class);

