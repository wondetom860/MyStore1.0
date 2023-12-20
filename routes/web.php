<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });


// Route::get('/products', function () {
//     return view('products');
// });

// Route::get('/posts',"App\Http\Controllers\PostsController@index");

// Route::get('/posts/{id}',"App\Http\Controllers\PostsController@show");

Route::resource("/posts","App\Http\Controllers\PostsController");
Route::resource("/test","App\Http\Controllers\TestController");

