<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ShowCarController;

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

//redirect
Route::get('/user/profile', function(){
    return "user profile";
})->name('profile');

Route::get("/current-user", function(){
    // this will redirect to user profile route
    // return redirect()->route('profile');

    // this will redirect to route profile
    return to_route('profile');
});

// route group
//prefix
Route::prefix('admin')->group(function(){
    Route::get("/users", function(){
        dd(route('admin.users'));
        return "Users";
    });
});
//name
Route::name('admin.')->group(function(){
    Route::get("/users", function(){
        return "Users Name";
    })->name('users');
});

// group combination name and prefix
Route::name('admin.')->prefix('admin')->group(function(){
    Route::get("/users2", function(){
        dd(route('admin.users2'));
        return "Users2 Name";
    })->name('users2');
});

// route fallback when unmatch route
Route::fallback(function(){
    return "fallback";
});

// small challenge
//sum 2 parameters
Route::get('/sum/{a}/{b}', function(int $a, int $b){
    return $a + $b;
})->whereNumber(['a', 'b']);

// controller lesson
// Route::get('/cars',[CarController::class, 'index']);

Route::get('/cars', ShowCarController::class);

