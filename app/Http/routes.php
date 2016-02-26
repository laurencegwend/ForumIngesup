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

/* User Authentication */
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', [
    'as' => 'auth.register',
    'uses' => 'Auth\AuthController@getRegister'

]);
Route::post('auth/register/post', 'Auth\AuthController@postRegister');


Route::get('questions', [
    'as' => 'question.list',
    'uses' => 'QuestionController@index'
]);

Route::get('question/create', [
    'as' => 'question.create',
    'uses' => 'QuestionController@create'
]);

Route::get('question/{id}', [
    'as' => 'question.show',
    'uses' => 'QuestionController@show'
]);

Route::get('question/{id}/edit', [
    'as' => 'question.edit',
    'uses' => 'QuestionController@edit'
]);

Route::post('question/store', [
    'as' => 'question.store',
    'uses' => 'QuestionController@store'
]);

Route::put('question/{id}/edit', [
    'as' => 'question.update',
    'uses' => 'QuestionController@update'
]);

Route::post('question/{id}/store', [
    'as' => 'answer.store',
    'uses' => 'AnswerController@store'
]);





