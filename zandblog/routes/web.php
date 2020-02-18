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

Route::get('/', 'FoodController@index')->name('home');
Route::get('/create', 'FoodController@create')->name('create');
Route::get('/restaurant', 'FoodController@restaurant')->name('restaurant');
Route::get('/contact', 'FoodController@contact')->name('contact');

Route::get('/hello', function () {
    return view('welcome');
});
