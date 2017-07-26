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
    return view('base');
});

Route::get('/home', 'MainController@ViewHome')->name('home');

Route::get('/main', 'MainController@ViewHome')->name('mainPage');

Route::get('/userMenu', 'UserMenuController@ViewMenu')->name('userMenu');

Auth::routes();


