<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function () {

    Route::get('/user', [
        'uses' => 'UserController@getDashboard',
        'as' => 'user_dashboard'
    ]);

    Route::get('/userr',function(){
        return view("user.dashboard");
    });


});