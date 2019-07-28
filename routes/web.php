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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin/dashboard', function () {
    return View::make('admin.dashboard.index')->with('title','Dashboard');
});

// **admin Driver route
Route::get('admin/driver', function () {
    return View::make('admin.driver.index')->with('title', 'Drivers');
});
Route::get('admin/driver/create', function () {
    return View::make('admin.driver.show')->with('title', 'Drivers');
});
Route::get('admin/driver/edit/{id}', function ($id) {
    return View::make('admin.driver.edit', ['id'=>$id])->with('title', 'Drivers');
});


// **admin Booking route
Route::get('admin/booking', function () {
    return View::make('admin.booking.index')->with('title', 'Bookings');
});
Route::get('admin/booking/create', function () {
    return View::make('admin.booking.show')->with('title', 'Bookings');
});
Route::get('admin/booking/edit/{id}', function ($id) {
    return View::make('admin.booking.edit', ['id'=>$id])->with('title', 'Bookings');
});

// **admin User route
Route::get('admin/user', function () {
    return View::make('admin.user.index')->with('title', 'Users');
});

//Route::get('admin/user/create', function () {
//    return View::make('admin.user.show')->with('title', 'Users');
//});
Route::get('admin/user/edit/{id}', function ($id) {
    return View::make('admin.user.edit', ['id'=>$id])->with('title', 'Users');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', function () {
    return view('admin.auth.login')->with('title','Login');
});
Route::get('/admin/register', function () {
    return view('admin.auth.register')->with('title','Register');
});