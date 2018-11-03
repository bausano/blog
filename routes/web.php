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

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resource('article', 'ArticleController');
});


Route::get('/', 'HomeController@index')->name('home');

Route::get('/article/{article}', 'HomeController@article')->name('article');

Route::get('/all', 'HomeController@displayAll');

Route::get('/tag/{tag}', 'HomeController@filter');

Auth::routes();
