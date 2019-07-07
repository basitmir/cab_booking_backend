<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/dashboard', function () {
    return View::make('admin.dashboard.index')->with('title','Dashboard');
});

 // **admin user route
 Route::get('admin/user', function () {
    return View::make('admin.user.index')->with('title', 'User');
});
Route::get('admin/user/create', function () {
    return View::make('admin.user.show')->with('title', 'User');
});
Route::get('admin/user/edit/{id}', function ($id) {
    return View::make('admin.user.edit', ['id'=>$id])->with('title', 'User');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function () {
    return view('admin.auth.login')->with('title','Login');
});
Route::get('/admin/register', function () {
    return view('admin.auth.register')->with('title','Register');
});