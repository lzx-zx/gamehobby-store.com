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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login');
    Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');

    Route::get('/', 'AdminsController@index')->name('admin.dashboard');

    //Category Management
    Route::get('/category', 'CategoriesController@index')->name('admin.category.index');
    Route::get('/category/create', 'CategoriesController@create')->name('admin.category.create');
    Route::post('/category', 'CategoriesController@store')->name('admin.category.store');
    Route::get('/category/{id}', 'CategoriesController@show')->name('admin.category.show');
    Route::get('/category/{id}/edit', 'CategoriesController@edit')->name('admin.category.edit');
    Route::put('/category', 'CategoriesController@update')->name('admin.category.update');
    Route::delete('/category', 'CategoriesController@destroy')->name('admin.category.delete');

    //Product Management
    Route::get('/product', 'ProductsController@index')->name('admin.product.index');
    Route::get('/product/create', 'ProductsController@create')->name('admin.product.create');
    Route::post('/product', 'ProductsController@store')->name('admin.product.store');
    Route::get('/product/{id}', 'ProductsController@show')->name('admin.product.show');
    Route::get('/product/{id}/edit', 'ProductsController@edit')->name('admin.product.edit');
    Route::put('/product', 'ProductsController@update')->name('admin.product.update');
    Route::delete('/product', 'ProductsController@destroy')->name('admin.product.delete');
});