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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
// ログインしているユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    // 本一覧
    Route::get('book', 'BookController@index');
    Route::get('book/search', 'BookController@search');
    Route::get('book/{book}', 'BookController@show');
});

// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('book/choose', 'BookController@choose');
    Route::get('book/choose/form', 'BookController@create_with_form');
    Route::post('book/choose/form', 'BookController@create_with_form');
    Route::get('book/choose/barcode', 'BookController@create_with_barcode');
    Route::post('book/choose/barcode', 'BookController@create_with_barcode');
    Route::resource('book', 'BookController', ['except' => ['create', 'index', 'show']]);
});
