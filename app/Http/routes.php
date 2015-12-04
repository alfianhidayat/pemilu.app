<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::any('pick', 'HomeController@pick');

// Authentication routes...
Route::get('auth/login', 'HomeController@getLogin');
Route::post('auth/login', 'HomeController@postLogin');
Route::get('auth/logout', 'HomeController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('admin/index', 'dashboardController@index');
Route::get('admin/count', 'dashboardController@create');

Route::get('admin/add', 'CandidateController@create');
Route::any('admin/cadidate/insert', 'CandidateController@store');

Route::get('admin/candidate/ubah/{id}', array('as' => 'ubah', 'uses' => 'CandidateController@edit'));

Route::put('admin/candidate/ubah/{id}', array('as' => 'ganti', 'uses' => 'CandidateController@update'));

Route::get('admin/candidate/hapus/{id}', array('as' => 'hapus', 'uses' => 'CandidateController@destroy'));

Route::get('admin/vote/hapus/{id}', array('as' => 'deletevote', 'uses' => 'VotesController@destroy'));

Route::get('admin/show', 'CandidateController@index');

Route::post('admin/vote', array('as' => 'vote', 'uses' => 'VotesController@store'));

Route::get('admin/vote', 'VotesController@index');
