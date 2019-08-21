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


Route::get('/A765','HomeController@index')->name('Home');



Route::get('/register','RegisterController@index')->name('Register');
Route::post('/register', 'RegisterController@post')->name('Register-post');

Route::get('/list','ListController@index')->name('List');

Route::get('/statistics','StatisticsController@index')->name('statistics');


Route::get('/','ErrorController@index')->name('Error');

