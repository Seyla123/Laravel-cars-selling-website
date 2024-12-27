<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'age' => 30
    ];
    dd($person);
    return view('welcome');
});

Route::view('/about','about',[
    'name' => 'John Doe',
]);

