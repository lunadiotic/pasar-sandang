<?php

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
    return view('pages.front.home.index');
});

Route::get('/product', 'HomeController@productAll')->name('product.list');
Route::get('/product/{slug}', 'HomeController@productDetail')->name('product.detail');
Route::get('/category/{category}', 'HomeController@categoryProduct')->name('product.category');

Route::get('/admin', function () {
    return view('layouts.back.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', 'CategoriesController');
    Route::resource('products', 'ProductsController');
    Route::get('products/{id}/image', 'ProductsController@imageForm')->name('products.images');
    Route::post('products/{id}/image', 'ProductsController@imageUpload')->name('products.images.upload');
    Route::delete('products/{id}/image', 'ProductsController@destroyImage')->name('products.images.destroy');
});

Route::group(['prefix' => 'table', 'as' => 'table.'], function () {
    Route::get('categories', 'CategoriesController@dataTable')->name('categories');
    Route::get('products', 'ProductsController@dataTable')->name('products');
});
