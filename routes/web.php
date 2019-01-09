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
Route::namespace('Api')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
});

Route::namespace('Client')->group(function () {
    Route::get('/', 'MainController@index')->name('client.home');
    Route::get('/vaga/{id}', 'MainController@vacant')->name('client.vacant');
});


Route::namespace('Admin')->prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('admin.home');
});

