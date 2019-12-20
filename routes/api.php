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

Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@profile');
Route::get('findUser', 'API\UserController@search');
Route::put('profile', 'API\UserController@updateProfile');


Route::get('users', 'Api\UserController@index')->name('users.index');

// Lấy thông tin sản phẩm theo id
Route::get('users/{id}', 'Api\ProductController@show')->name('users.show');

// Thêm sản phẩm mới
Route::post('users', 'Api\ProductController@store')->name('users.store');

// Cập nhật thông tin sản phẩm theo id
# Sử dụng put nếu cập nhật toàn bộ các trường
//Route::put('users/{id}', 'Api\ProductController@update')->name('users.update');
# Sử dụng patch nếu cập nhật 1 vài trường
Route::patch('users/{id}', 'Api\ProductController@update')->name('users.update');

// Xóa sản phẩm theo id
Route::delete('users/{id}', 'Api\ProductController@destroy')->name('users.destroy');