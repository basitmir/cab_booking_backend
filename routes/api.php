<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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

Route::post('userlogin', 'AuthController@userLogin');
Route::post('userregister', 'AuthController@userRegister');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'AuthController@details');
    Route::post('adminlogout', 'AuthController@adminLogout');
});

Route::apiResource('getUser','UserController');


// Driver apis
Route::get('getAllDrivers','UserController@getAllDrivers');
Route::get('getAvailableDrivers','UserController@getAvailableDrivers');
Route::post('addDriver','UserController@addDriver');
Route::delete('deleteDriver/{id}','UserController@deleteDriver');