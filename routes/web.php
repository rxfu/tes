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
    return redirect()->route('student.home');
});

Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', 'LoginController@logout')->name('logout');

        Route::name('home.')->group(function() {
            Route::get('/', 'HomeController@dashboard')->name('dashboard');
        });

        Route::name('user.')->group(function() {
            Route::get('password', 'UserController@password')->name('password');
            Route::put('change-password', 'UserController@changePassword')->name('change');
        });
    });
});

Route::name('student.')->prefix('student')->namespace('Student')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::middleware('auth:student')->group(function () {
        Route::post('logout', 'LoginController@logout')->name('logout');
        Route::get('/', 'HomeController@index')->name('home');
    });
});
