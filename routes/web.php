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
Route::get('/dashboard', function () {
    return view('admin.dashboard.index')->with('title','Dashboard');
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