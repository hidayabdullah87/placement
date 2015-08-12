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

get('/', [ 'as' => 'home', 'uses' => 'HomeController@index' ]);


// Authentication routes...
Route::get('auth/login', [ 'as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin' ]);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', [ 'as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', [ 'as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');


get('student', [ 'as' => 'student', 'uses' => 'StudentController@index' ]);

get('job/{job_id}', ['as' => 'job.detail', 'uses' => 'JobController@getJob']);

get('job/redirect/{job_id}', ['middleware' => 'auth', 'as' => 'job.indeed', 'uses' => 'JobController@redirectToIndeed']);