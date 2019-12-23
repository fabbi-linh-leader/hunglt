<?php

use Illuminate\Http\Request;

/*php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('signup', 'AuthController@register'); Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function ()
	 {
	 	 Route::get('auth', 'AuthController@user');
	 	 Route::post('logout', 'AuthController@logout');
	 	
	 	  }
	 );


Route::middleware('jwt.refresh')->get('/token/refresh', 'AuthController@refresh');

 Route::apiResources(['user' => 'API\UserController']);
		Route::get('profile', 'API\UserController@profile');
		Route::get('findUser', 'API\UserController@search');
		Route::put('profile', 'API\UserController@updateProfile');