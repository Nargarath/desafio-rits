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

Route::namespace('Api')->prefix('api')->name('api.')->group(function () {
    Route::post('/vaga/{id}/candidato/add', 'CandidateController@store')->name('candidate.add');
});

Route::namespace('Client')->name('client.')->group(function () {
    Route::get('/', 'MainController@index')->name('home');
    Route::get('/vaga/{id}', 'MainController@vacant')->name('vacant');
});


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Auth::routes();
    Route::get('/', function () {
        return redirect(route('admin.login'),301);
    });
    Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');

    Route::middleware('auth')->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('adicionar', 'UserController@create')->name('create');
        Route::post('salvar', 'UserController@store')->name('store');
        Route::get('editar/{id}', 'UserController@edit')->name('edit');
        Route::put('{id}', 'UserController@update')->name('update');
        Route::get('deletar/{id}', 'UserController@destroy')->name('destroy');
    });
    Route::middleware('auth')->prefix('jobs')->name('jobs.')->group(function () {
        Route::get('/', 'JobVacantController@index')->name('index');
        Route::get('adicionar', 'JobVacantController@create')->name('create');
        Route::post('salvar', 'JobVacantController@store')->name('store');
        Route::get('editar/{id}', 'JobVacantController@edit')->name('edit');
        Route::patch('{id}', 'JobVacantController@update')->name('update');
        Route::get('deletar/{id}', 'JobVacantController@destroy')->name('destroy');
    });
    Route::middleware('auth')->prefix('candidates')->name('candidates.')->group(function () {
        Route::get('/', 'CandidateController@index')->name('index');
        Route::get('adicionar', 'CandidateController@create')->name('create');
        Route::post('salvar', 'CandidateController@store')->name('store');
        Route::get('editar/{id}', 'CandidateController@edit')->name('edit');
        Route::put('{id}', 'CandidateController@update')->name('update');
        Route::get('deletar/{id}', 'CandidateController@destroy')->name('destroy');
    });
});

