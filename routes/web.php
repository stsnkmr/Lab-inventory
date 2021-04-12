<?php

Auth::routes();
// Route::group(['middleware' => ['auth', 'can:system-only']], function () {
// });
// 管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::resource('/user', 'UserController', ['except' => ['show']]);
    Route::resource('/book', 'BookController', ['except' => ['create', 'index', 'show']]);
    Route::get('/book/csv', 'BookController@createCSV');
    Route::get('/book/choice', 'BookController@choice')->name('book.choice');
    Route::get('/book/choice/form', 'BookController@create_with_form')->name('book.create_with_form');
    Route::post('/book/choice/form', 'BookController@create_with_form')->name('book.create_with_form');
    Route::get('/book/choice/barcode', 'BookController@create_with_barcode')->name('book.create_with_barcode');
    Route::post('/book/choice/barcode', 'BookController@create_with_barcode')->name('book.create_with_barcode');
});
    // 登録ユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    // 本検索
    Route::get('/book/search', 'BookController@search')->name('book.search');
    // 本一覧
    Route::get('/book', 'BookController@index')->name('book.index');
    Route::get('/book/{book}', 'BookController@show')->name('book.show');
    // ユーザー情報設定（個人）
    Route::get('/user/change_password', 'UserController@change_password');
    Route::post('/user/change_password', 'UserController@update_password');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/shop', 'ShopController@index');
    Route::resource('/shop/item', 'ItemController');
    Route::get('/shop/seller', 'SellerController@index');
});
Auth::routes([
    'verify'   => true, // メール確認機能（※5.7系以上のみ）
    'register' => false, // デフォルトの登録機能OFF
    'reset'    => false,  // メールリマインダー機能ON);
]);
