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

Route::get('/', 'HomeController@index')->name('selamat');

Auth::routes();
Route::get('/home', 'ArticlesController@index')->name('home');
Route::get('/ca', 'ArticlesController@buat')->name('ca');
Route::post('/createarticle', 'ArticlesController@store')->name('createarticle');
Route::get('/adelete/{id}', 'ArticlesController@destroy')->name('articleDelete');

Route::get('/createcat', 'CategoriesController@index')->name('ccat');
Route::post('/cc', 'CategoriesController@store')->name('cc');
Route::get('/cdelete/{id}', 'CategoriesController@destroy')->name('articleDelete');