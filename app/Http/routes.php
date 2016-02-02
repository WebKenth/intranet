<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => 'web'], function () {

		Route::get('/', 'PageController@index');

		Route::auth();

		// With sidebar
		Route::get('/dashboard', 'DashboardController@index');
		Route::get('/news', 'DashboardController@news');
		Route::get('/barcontrol', 'DashboardController@barcontrol');
		Route::get('/inbox', 'DashboardController@inbox');
		Route::get('/accounting', 'DashboardController@accounting');

		Route::get('/user/{user}', function (App\User $user) {
				return $user;
			});
	});
