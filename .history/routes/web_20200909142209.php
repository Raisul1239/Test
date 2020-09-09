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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_category', 'CategoryController@index')->name('add_category');
Route::match(['get', 'post'], 'add-category', 'CategoryController@addCategory');
Route::get('view-categories', 'CategoryController@viewCategories');
Route::match(['get', 'post'], 'edit-category/{id}', 'CategoryController@editCategory');
Route::match(['get', 'post'], 'delete-category/{id}', 'CategoryController@deleteCategory');


Route::get('/add_product', 'ProductController@index')->name('add_product');
Route::match(['get', 'post'], 'add-product', 'ProductController@addProduct');

