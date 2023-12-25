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

Route::get('/', App\Http\Controllers\HomeController::class . '@index')->name('home.index');

// Route::get('/about', function () {
//     return redirect('/posts');
// });

Route::get('/about', \App\Http\Controllers\HomeController::class . '@about')->name('home.about');

Route::get('/test', function () {
    return redirect('/test');
});

Route::get('/error/{message}', function ($message) {
    return view('error')->with('message', $message);
})->name('error');

// Route::get('/cart', function () {
//     return view('cart');
// });

// 
Route::get('/home/insert', App\Http\Controllers\HomeController::class . '@insert')->name('sample.insert');
Route::get('/home/select', App\Http\Controllers\HomeController::class . '@select')->name('sample.select');
Route::get('/home/update', App\Http\Controllers\HomeController::class . '@update')->name('sample.edit');

// product controller-view routing
Route::get('/products', App\Http\Controllers\ProductController::class . '@index')->name('products.index');
Route::get('/products/{id}', App\Http\Controllers\ProductController::class . '@show')->name('products.show');

Route::get('/post', App\Http\Controllers\PostsController::class . '@index')->name('post.list');
Route::get('/post/insert', App\Http\Controllers\PostsController::class . '@insert')->name('post.insert');
Route::get('/post/select', App\Http\Controllers\PostsController::class . '@select')->name('post.show');
Route::get('/post/find/{id}', App\Http\Controllers\PostsController::class . '@show')->name('post.view');
Route::get('/post/soft_delete/{id}', App\Http\Controllers\PostsController::class . '@softDelete')->name('post.soft_delete');
Route::get('/post/read_soft_deletes', App\Http\Controllers\PostsController::class . '@readSoftDeletes')->name('post.read_soft_delets');
Route::get('/post/restore/{id}', App\Http\Controllers\PostsController::class . '@restore')->name('post.restore');
// Route::get('/products/{id}', App\Http\Controllers\ProductController::class . '@show')->name('products.show');

// cart controller-view routing
Route::get('/cart', App\Http\Controllers\CartController::class . '@index')->name('cart.index');
Route::get('/cart/{id}', App\Http\Controllers\CartController::class . '@show')->name('cart.show');

Route::get('/test', function () {
    return view('test');
});


Route::resource('/test', 'App\Http\Controllers\TestController');
Route::resource('/posts', 'App\Http\Controllers\PostsController');
Route::get('/posts.about/{name}', 'App\Http\Controllers\PostsController@about');
Route::get('/pages/check/{view}', '\App\Http\Controllers\PagesController@checkIfExists');
Route::get('/home', '\App\Http\Controllers\HomeController@index');
Route::get('/home/employee-list', '\App\Http\Controllers\HomeController@employyes_list');
Route::get('/home/new-menu', '\App\Http\Controllers\HomeController@addNewMenu');
// Route::get('about','');
Route::resource('/test', 'App\Http\Controllers\TestController');
