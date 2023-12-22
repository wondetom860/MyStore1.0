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

Route::get('/',App\Http\Controllers\HomeController::class.'@index')->name('home.index');

// Route::get('/about', function () {
//     return redirect('/posts');
// });

Route::get('/about', \App\Http\Controllers\HomeController::class .'@about')->name('home.about');

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
Route::get('/home','\App\Http\Controllers\HomeController@index');
Route::get('/home/employee-list','\App\Http\Controllers\HomeController@employyes_list');
Route::get('/home/new-menu','\App\Http\Controllers\HomeController@addNewMenu');
// Route::get('about','');


