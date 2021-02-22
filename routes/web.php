<?php

use App\Http\Controllers\BookController;

Auth::routes();
// Route::group(['middleware' => ['auth', 'can:system-only']], function () {
// });
// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::resource('book', 'BookController', ['except' => ['create', 'index', 'show']]);
    Route::get('book/csv', 'BookController@createCSV');
    Route::get('book/choice', 'BookController@choice')->name('book.choice');
    Route::get('book/choice/form', 'BookController@create_with_form')->name('book.create_with_form');
    Route::post('book/choice/form', 'BookController@create_with_form')->name('book.create_with_form');
    Route::get('book/choice/barcode', 'BookController@create_with_barcode')->name('book.create_with_barcode');
    Route::post('book/choice/barcode', 'BookController@create_with_barcode')->name('book.create_with_barcode');
});
// 登録ユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    // 本検索
    Route::get('book/search', 'BookController@search')->name('book.search');
    // 本一覧
    Route::get('book', 'BookController@index')->name('book.index');
    Route::get('book/{book}', 'BookController@show')->name('book.show');
});

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
