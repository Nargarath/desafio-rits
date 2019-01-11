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
Route::namespace('Api')->prefix('api')->group(function () {
    Route::post('/vaga/{id}/candidato/add', 'CandidateController@store')->name('api.candidate.add');
});

Route::namespace('Client')->group(function () {
    Route::get('/', 'MainController@index')->name('client.home');
    Route::get('/vaga/{id}', 'MainController@vacant')->name('client.vacant');
});


Route::namespace('Admin')->prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('admin.home');

    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@index')->name('admin.users.index');
        Route::get('adicionar', 'UserController@create')->name('admin.users.create');
        Route::post('salvar', 'UserController@store')->name('admin.users.store');
        Route::get('editar/{id}', 'UserController@edit')->name('admin.users.edit');
        Route::put('{id}', 'UserController@update')->name('admin.users.update');
        Route::get('deletar/{id}', 'UserController@destroy')->name('admin.users.destroy');
    });
    Route::prefix('jobs')->group(function () {
        Route::get('/', 'JobVacantController@index')->name('admin.jobs.index');
        Route::get('adicionar', 'JobVacantController@create')->name('admin.jobs.create');
        Route::post('salvar', 'JobVacantController@store')->name('admin.jobs.store');
        Route::get('editar/{id}', 'JobVacantController@edit')->name('admin.jobs.edit');
        Route::patch('{id}', 'JobVacantController@update')->name('admin.jobs.update');
        Route::get('deletar/{id}', 'JobVacantController@destroy')->name('admin.jobs.destroy');
    });
    Route::prefix('candidates')->group(function () {
        Route::get('/', 'CandidateController@index')->name('admin.candidates.index');
        Route::get('adicionar', 'CandidateController@create')->name('admin.candidates.create');
        Route::post('salvar', 'CandidateController@store')->name('admin.candidates.store');
        Route::get('editar/{id}', 'CandidateController@edit')->name('admin.candidates.edit');
        Route::put('{id}', 'CandidateController@update')->name('admin.candidates.update');
        Route::get('deletar/{id}', 'CandidateController@destroy')->name('admin.candidates.destroy');
    });
});

