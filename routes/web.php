<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
// define route for home page
Route::get('/', function () {
    return view('welcome');
});

// math

Route::prefix('math')->group(function () {
    Route::get('/sum/{a}/{b}', [MathController::class, 'sum'])->whereNumber(['a', 'b']);
    Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract']);
});
