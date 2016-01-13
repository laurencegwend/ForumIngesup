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

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/', 'Auth\AuthController@getLogin');

//Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
*/

/* User Authentication */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register/post', 'Auth\AuthController@postRegister');

/*Route::get('login', [
    'as' => '/auth/login',
    'uses' => 'Auth\AuthController@getLogin'
]);

Route::get('register', [
    'as' => '/auth/register',
    'uses' => 'Auth\AuthController@getRegister'
]);
*/

/* Authenticated users */
Route::group(['middleware' => 'auth'], function()
{
    Route::get('users/dashboard', array('as'=>'dashboard', function()
    {
        return View('users.dashboard');
    }));
});

Route::group(['namespace' => 'Admin', 'prefix' =>'admin'], function(){

    Route::resource('posts', 'PostsController');
    Route::post('posts/create', 'PostsController@store')->name("posts.store");

});


