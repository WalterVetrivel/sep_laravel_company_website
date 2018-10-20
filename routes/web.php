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

Route::get('/', 'MainController@home')->name('home');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');
Route::get('/blogs', 'MainController@blog')->name('blog');
Route::get('/post/{id}', 'MainController@post')->name('post');
