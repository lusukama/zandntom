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
Route::post('/create', 'FoodController@store')->name('store');
Route::get('/restaurant', 'FoodController@restaurant')->name('restaurant');
Route::get('/meet2meat', 'FoodController@meet2meat')->name('meet2meat');
Route::get('/shakaBoksburg', 'FoodController@shakaBoksburg')->name('shakaBoksburg');
Route::get('/shakaBraamfontein', 'FoodController@shakaBraamfontein')->name('shakaBraamfontein');
Route::get('/contact', 'FoodController@contact')->name('contact');

Route::get('/hello', function () {
    return view('welcome');
});
