<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/admin', App\Http\Controllers\Admin\AdminHomeController::class . '@index')->name('admin.home.index');

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

// only for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', App\Http\Controllers\CartController::class . '@purchase')->name('cart.purchase');
    Route::get('/my-account/orders', App\Http\Controllers\MyAccountController::class . '@orders')->name('myaccount.orders');
});

Route::middleware('hasrole:superAdmin')->group(function () {
    Route::get('/roles', App\Http\Controllers\RoleController::class . '@index')->name('roles.index');
    Route::get('/users', App\Http\Controllers\RoleController::class . '@users')->name('users.index');
});

Route::middleware('hasrole:admin,superAdmin')->prefix('/admin')->group(function () {
    Route::get('', App\Http\Controllers\Admin\AdminHomeController::class . '@index')->name('admin.home.index');
    Route::get('/products', App\Http\Controllers\Admin\AdminProductController::class . '@index')->name('admin.products.index');
    Route::get('/products/create', App\Http\Controllers\Admin\AdminProductController::class . '@create')->name('admin.products.create');
    Route::post('/products/store', App\Http\Controllers\Admin\AdminProductController::class . '@store')->name('admin.products.store');
    Route::get('/products/show/{id}', App\Http\Controllers\Admin\AdminProductController::class . '@show')->name('admin.products.show');
    Route::post('/products/{id}/delete', App\Http\Controllers\Admin\AdminProductController::class . '@delete')->name('admin.product.delete');
    Route::get('/products/{id}/edit', App\Http\Controllers\Admin\AdminProductController::class . '@edit')->name('admin.product.edit');
    Route::put('/products/{id}/update', App\Http\Controllers\Admin\AdminProductController::class . '@update')->name('admin.product.update');
    // Route::get('/roles', App\Http\Controllers\RoleController::class . '@index')->name('roles.index');
    // Route::get('/users', App\Http\Controllers\RoleController::class . '@users')->name('users.index');
});

Route::get('/post', App\Http\Controllers\PostsController::class . '@index')->name('post.list');
Route::get('/post/insert', App\Http\Controllers\PostsController::class . '@insert')->name('post.insert');
Route::get('/post/insert_with_image', App\Http\Controllers\PostsController::class . '@insertPostWithPostImage')->name('post.insert_with_image');
Route::get('/post/select', App\Http\Controllers\PostsController::class . '@select')->name('post.show');
Route::get('/post/find/{id}', App\Http\Controllers\PostsController::class . '@show')->name('post.view');
Route::get('/post/soft_delete/{id}', App\Http\Controllers\PostsController::class . '@softDelete')->name('post.soft_delete');
Route::get('/post/read_soft_deletes', App\Http\Controllers\PostsController::class . '@readSoftDeletes')->name('post.read_soft_delets');
Route::get('/post/restore/{id}', App\Http\Controllers\PostsController::class . '@restore')->name('post.restore');
Route::get('/postCategories', App\Http\Controllers\PostCategoryController::class . '@index')->name('post.categories');
// 
// Route::get('/products/{id}', App\Http\Controllers\ProductController::class . '@show')->name('products.show');

// cart controller-view routing
Route::get('/cart', App\Http\Controllers\CartController::class . '@index')->name('cart.index');
Route::get('/cart/{id}', App\Http\Controllers\CartController::class . '@show')->name('cart.show');
Route::post('/cart/add/{id}', App\Http\Controllers\CartController::class . '@add')->name('cart.add');
Route::get('/cart/delete', App\Http\Controllers\CartController::class . '@delete')->name('cart.delete');

// Route::get('/test', function () {
//     return view('test');
// });


Route::resource('/test', 'App\Http\Controllers\TestController');
Route::resource('/posts', 'App\Http\Controllers\PostsController');
Route::get('/posts.about/{name}', 'App\Http\Controllers\PostsController@about');
Route::get('/pages/check/{view}', '\App\Http\Controllers\PagesController@checkIfExists');
Route::get('/home', '\App\Http\Controllers\HomeController@index');
Route::get('/home/employee-list', '\App\Http\Controllers\HomeController@employyes_list');
Route::get('/home/new-menu', '\App\Http\Controllers\HomeController@addNewMenu');
// Route::get('about','');
Route::resource('/test', 'App\Http\Controllers\TestController');

Auth::routes();

// Route::get('/test', App\Http\Controllers\Admin\AdminHomeController::class . '@index')->middleware('hasrole:supperAdmin,admin')->name('admin.test');
