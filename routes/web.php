<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class,"index"])->name("index");


Route::prefix("admin")->group(function(){

    Route::resource("product",ProductController::class);

});
