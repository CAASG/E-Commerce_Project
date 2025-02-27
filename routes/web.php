<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);

Route::get('/product', [HomeController::class,'index']);

Route::get('/product/{name}', function($name){
    return $name;
});

Route::get('/product/{name}/{categoria}', function($name,$category){
    return "$name y categoria $category";
});
