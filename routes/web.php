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

    Route::get('/register', [
        'uses' => 'PageController@getRegisterPage',
        'as' => 'user_dashboard'
    ]);

    Route::post('/registering', [
        'uses' => 'User_detailsController@setUser',
        'as' => 'user_registration'
    ]);

    Route::get('/myprofile', [
        'uses' => 'PageController@getMyProfile',
        'as' => 'my_profile'
    ]);

});
Route::get('search',function (){
    return view('user.search');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/login_1', function(){
    return view('auth.login_1');
});

