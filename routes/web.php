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
Route::get('/', 'PagesController@home')->name('home');

Route::get('products', function () {
    return App\Product::paginate(4);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'DashboardController@index')->name('index');

Route::resource('categories', 'CategoriesController');

Route::resource('products', 'ProductsController');
