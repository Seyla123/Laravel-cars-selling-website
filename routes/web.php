<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// define route for home page
Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/products', ProductController::class);
// Route::apiResource('/cars', CarController::class);

//can group api like this

Route::apiResources([
    'cars' => CarController::class,
    'products' => ProductController::class
]);
