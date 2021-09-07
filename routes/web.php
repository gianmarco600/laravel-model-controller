<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','HomeController@index')->name('homepage');

Route::get('/characters','HomeController@characters')->name('characters');

Route::get('/comic/{id}','ComicController@comic')->name('comic');

Route::get('/comics','HomeController@comics')->name('comics');

Route::get('/movies','HomeController@movies')->name('movies');

Route::get('/tv','HomeController@tv')->name('tv');

Route::get('/games','HomeController@games')->name('games');

Route::get('/videos','HomeController@videos')->name('videos');

Route::get('/news','HomeController@news')->name('news');

Route::get('/shop','HomeController@news')->name('shop');