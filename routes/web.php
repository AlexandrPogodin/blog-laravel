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


Route::get('/', 'ArticlesController@articles');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles/create', 'ArticlesController@create');
Route::get('/articles/{id}', 'ArticlesController@article');

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
