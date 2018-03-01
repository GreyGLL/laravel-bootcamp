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

Route::get('posts', 'PostsController@index');

Route::get('form', 'PostsController@create');

Route::post('form', 'PostsController@store');

Route::get('post/{id}', 'PostsController@show');

Route::get('form/{id}/edit', 'PostsController@edit');

Route::post('post/{id}', 'PostsController@update');

Route::get('delete/{id}', 'PostsController@destroy');

Route::get('posts/{category_id}', 'PostsController@list');

