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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/wechat', 'WeChatController@serve');

//登陆页面
Route::get('login', 'LoginController@loginView')->name('login');
Route::post('login', 'LoginController@login')->name('login');

Route::group(['namespace' => 'Admin'], function (){
    Route::get('dashboard', 'AdminController@dashboardView')->name('dashboard');
});
