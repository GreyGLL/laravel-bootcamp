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

Route::get('posts', 'PostsController@index')->name('posts.index');

Route::get('post/{id}', 'PostsController@show')->name('posts.show');

Route::get('posts/{category_id}', 'PostsController@list')->name('posts.list');

Route::get('categories', 'CategoriesController@index')->name('categories.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('form', 'PostsController@create')->name('posts.create');

    Route::post('form', 'PostsController@store')->name('posts.store');

    Route::get('form/{id}/edit', 'PostsController@edit')->name('posts.edit');

    Route::post('post/{id}', 'PostsController@update')->name('posts.update');

    Route::get('delete/{id}', 'PostsController@destroy')->name('posts.destroy');

    Route::get('categories/create','CategoriesController@create')->name('categories.create');  

    Route::get('categories/{id}/edit','CategoriesController@edit')->name('categories.edit');

    Route::post('categories/store','CategoriesController@store')->name('categories.store');

    Route::get('categories/{id}/destroy','CategoriesController@destroy')->name('categories.destroy');

    Route::get('categories/list','CategoriesController@list')->name('categories.list');
});
