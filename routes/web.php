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




# 上传路由



Route::post('/', 'Home\UploadController@handle');

Route::group([], function () {

    Route::resource('/home/shopDetail', 'Home\ShopDetailController');

});

