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

//// Searching placement routes...
//Route::get('placement/main', [ 'as' => 'placements.main', 'uses' => 'Placement\PlacementController@index']);
//Route::post('placement/main', 'Placement\PlacementController@index');
//Route::get('placement/redirect/{keyword}', [ 'as' => 'placement', 'uses' => 'PlacementController@index' ]);

get('student', [ 'as' => 'student', 'uses' => 'StudentController@index' ]);

get('student/profile', [ 'as' => 'student/profile', 'uses' => 'StudentController@profile' ]);

get('placement/{placement}', [ 'as' => 'placement', 'uses' => 'PlacementController@index' ]);

get('job/{job_id}', ['as' => 'job.detail', 'uses' => 'JobController@getJob']);

get('job/redirect/{job_id}', ['middleware' => 'auth', 'as' => 'job.indeed', 'uses' => 'JobController@redirectToIndeed']);

get('staff', [ 'as' => 'staff', 'uses' => 'UserController@user' ]);

get('staff', function(){

    $users = App\User::all();
    return view('staff', compact('users'));
});