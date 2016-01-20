<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin'], 'namespace' => '\Admin'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('services', 'ServicesController');
    Route::resource('reservations', 'ReservationsController');
    Route::get('/calendars', 'ReservationsController@viewcalendars');
});
Route::group(['prefix' => 'user', 'middleware' => 'auth', 'namespace' => '\User'], function(){
    Route:resource('reservations', 'ReservationsController');
    Route::get('/pdf/{id}', 'ReservationsController@generatepdf');
});
