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
Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
