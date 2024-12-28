<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
// Signup
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
