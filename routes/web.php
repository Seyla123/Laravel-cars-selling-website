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

Route::get('/product/{id}', function(string $id){
    return "Product $id";
});

Route::get('{lang}/product/{id}', function(string $lang, string $id){
    return "Product $id in $lang";
});
