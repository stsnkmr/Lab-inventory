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
Route::get('book/choose', 'BookController@choose');
Route::get('book/choose/form', 'BookController@create_with_form');
Route::post('book/choose/form', 'BookController@create_with_form');
Route::get('book/choose/barcode', 'BookController@create_with_barcode');
Route::post('book/choose/barcode', 'BookController@create_with_barcode');
Route::resource('book', 'BookController', ['except' => ['create']]);

Route::get('/home', 'HomeController@index')->name('home');
