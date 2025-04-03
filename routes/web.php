<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);


/* Route::get('/products', [ProductController::class,'index']);

Route::get('/products/create', [ProductController::class,'create']);

Route::get('/products/{name}', [ProductController::class,'show']); */

Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
});