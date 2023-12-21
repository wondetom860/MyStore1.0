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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return redirect('/posts');
});
Route::get('/test', function () {
    return redirect('/test');
});

// Route::get('/cart', function () {
//     return view('cart');
// });


Route::get('/products', function () {
    return view('products');
});
Route::get('/test', function () {
    return view('test');
});


Route::resource('/test','App\Http\Controllers\TestController');
Route::resource('/posts','App\Http\Controllers\PostsController');
Route::get('/posts.about/{name}','App\Http\Controllers\PostsController@about');
Route::get('/pages/check/{view}','\App\Http\Controllers\PagesController@checkIfExists');


