<?php

use Illuminate\Support\Facades\Route;

// define route for home page
Route::get('/', function () {
    return view('welcome');
});
