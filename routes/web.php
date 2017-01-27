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

    Route::get('/request', [
        'uses' => 'PageController@getRegisterPage',
        'as' => 'user_dashboard'
    ]);

    Route::post('/registering', [
        'uses' => 'User_details_tempController@setUser',
        'as' => 'user_registration'
    ]);

    Route::get('/myprofile', [
        'uses' => 'PageController@getMyProfile',
        'as' => 'my_profile'
    ]);

    Route::post('/searching_batch', [
        'uses' => 'User_detailsController@getBatch',
        'as' => 'batch_details'
    ]);

    Route::post('/searching_name', [
        'uses' => 'User_detailsController@getStudents',
        'as' => 'details_by_name'
    ]);

    Route::get('search',function (){
        return view('public.search');
    });

    Route::get('/search', [
        'uses' => 'PageController@getSearchPage',
        'as' => 'public_search'
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index');


