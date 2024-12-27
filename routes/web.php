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
// required parameter
Route::get('/product/{id}', function(string $id){
    $routes = route('route-name');
    dd($routes);
    return "Product $id";
});

// 2 parameter route
// required parameter
// Route::get('{lang}/product/{id}', function(string $lang, string $id){
//     return "Product $id in $lang";
// });

// optional parameter route
// it mean the parameter is optional
// but have to assign null default to $category otherwise it will throw error
Route::get('/product/{category?}', function(string $category = null){
   return "Product $category";
});


// required parameter with regex pattern
Route::get('/user/{username}', function(string $username){
    return "User $username";
})->where('username', '[a-z]+');// regex pattern for username only lower case otherwise it will throw error

Route::get('{lang}/product/{id}', function(string $lang, string $id){
    return "Product $id in $lang";
})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);

Route::get('/search/{search}', function(string $search){
    return "Search $search";
})->where('search', '.*');

//route name
Route::get('route-name-22', function(){
    return "Route Name";
})->name('route-name');
