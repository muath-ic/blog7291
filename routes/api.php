<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// php artisan serve | serv | ser
// First: create endpoints (URLs)
// 1. method => get | post | delete | put(for update)
// 2. url => categories
// 3. the function with its controller name => CategoryBrain@index
// 3.1 index (function)
// 3.2 CategoryBrain (Brain)

// Second create controllers
// $ php artisan make:controller -r <Name>Brain 
// example:$  php artisan make:controller -r CategoryBrain 

Route::get(
    'categories',
    'CategoryBrain@index'
);

// inside {} will be a variable like $category_id
Route::get(
    'categories/{category_id}',
    'CategoryBrain@show'
);

Route::get(
    'products1',
    'ProductComputer@index'
);

Route::get(
    'products',
    'ProductBrain@index'
);

Route::get(
    'products/{product_id}',
    'ProductBrain@show'
);

Route::get(
    'search/{product_name}',
    'ProductBrain@search'
);