<?php

use Illuminate\Support\Facades\Route;

// define route for home page
Route::get('/', function () {
    $person = [
        'name' => 'John Doe',
        'age' => 30
    ];
    //dump($person); //for debug laravel built-in
    // dump and die , mean dump and exit the script
    dd($person);
    // return view
    return view('welcome');
});

// using view directly and pass data
Route::view('/about','about',[
    'name' => 'John Doe',
]);

// 1 parameter route
Route::get('/product/{id}', function(string $id){
    return "Product $id";
});

// 2 parameter route
Route::get('{lang}/product/{id}', function(string $lang, string $id){
    return "Product $id in $lang";
});

// optional parameter route
// it mean the parameter is optional
Route::get('/product/{category?}', function(string $category = null){
   return "Product $category";
});
