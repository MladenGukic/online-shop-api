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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', 'Auth\RegisterController@create');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::middleware('jwt')->resource('/managers', 'ManagerController');
Route::middleware('jwt')->resource('/shops', 'ShopController');
Route::middleware('jwt')->resource('/articles', 'ArticleController');
