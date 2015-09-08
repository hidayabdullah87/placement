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

// home routes
get('/', [ 'as' => 'home', 'uses' => 'HomeController@index' ]);


// Authentication routes...
Route::get('auth/login', [ 'as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin' ]);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', [ 'as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', [ 'as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Student routes
get('student', ['middleware' => 'auth', 'as' =>'student', 'uses' => 'StudentController@index' ]);
get('student/profile', ['middleware' => 'auth', 'as' => 'student/profile', 'uses' => 'StudentController@profile' ]);

// Placement routes
get('placement/{placement}', [ 'as' => 'placement', 'uses' => 'PlacementController@index' ]);
get('placement', [ 'as' => 'placement.query', 'uses' => 'PlacementController@indexQuery' ]);

// Search job routes
get('job/{job_id}', ['as' => 'job.detail', 'uses' => 'JobController@getJob']);
get('job/redirect/{job_id}', ['middleware' => 'auth', 'as' => 'job.indeed', 'uses' => 'JobController@redirectToIndeed']);

// admin routes
get('admin', ['middleware' => 'auth', 'as' => 'admin', 'uses' => 'UserController@indexall' ]);
get('admin/user', ['middleware' => 'auth', 'as' => 'admin.user', 'uses' => 'UserController@index' ]);

get('users/make-admin/{id}', ['middleware' => 'auth', 'as'=>'user.make_admin', 'uses' => 'UserController@makeAdmin']);
get('users/revoke-admin/{id}', ['middleware' => 'auth', 'as'=>'user.revoke_admin', 'uses' => 'UserController@revokeAdmin']);

// News and Events routes
Route::resource('news', 'NewsController');get('new/index', ['middleware' => 'auth', 'as' => 'new.index', 'uses' => 'NewsController@index' ]);
get('newsevent', ['middleware' => 'auth', 'as' => 'newsevent', 'uses' => 'NewsController@view' ]);