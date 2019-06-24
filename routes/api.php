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

//AUTH ROUTES CREATED BY SA**************************
Route::post('adminlogin', 'AuthController@adminLogin');
Route::post('adminregister', 'AuthController@adminRegister');
Route::post('adminlogout', 'AuthController@adminLogout');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'AuthController@details');
});