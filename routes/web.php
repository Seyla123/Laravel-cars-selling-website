<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('login');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

// Car

// Public Routes
Route::get('car/search', [CarController::class, 'search'])->name('car.search');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::prefix('/car')->group(function () {
        Route::get('/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
        Route::get('/', [CarController::class, 'index'])->name('car.index');
        Route::get('/create', [CarController::class, 'create'])->name('car.create');
        Route::post('', [CarController::class, 'store'])->name('car.store');
        Route::get('/{car}/edit', [CarController::class, 'edit'])->name('car.edit')->can('edit', 'car');
        Route::get('/{car}/update', [CarController::class, 'edit'])->name('car.update')->can('edit', 'car');
        Route::put('/{car}', [CarController::class, 'update'])->name('car.update');
        Route::delete('/{car}', [CarController::class, 'destroy'])->name('car.destroy')->can('delete', 'car');
    });
});

// Public route for viewing a single car
Route::get('car/{car}', [CarController::class, 'show'])->name('car.show');