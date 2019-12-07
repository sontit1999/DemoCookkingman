<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Lấy danh sách post
Route::get('post', 'PostController@index');

// Lấy thông tin post theo id
Route::get('post/{id}', 'PostController@show');

// Thêm post mới
Route::post('post', 'PostController@store');
// Xóa sản phẩm theo id
Route::delete('post/{id}', 'PostController@destroy');


// Lấy danh sách comment của post
Route::get('comment/{id}', 'CommentController@show');
// Thêm comment mới vào 1 post
Route::post('comment/{idpost}/{iduser}', 'CommentController@store');
// Xóa comment 
Route::delete('comment/{id}', 'CommentController@destroy');

// Lấy thông tin client
Route::get('client/{id}', 'UserController@show');
// Thêm mới client
Route::post('client', 'UserController@store');