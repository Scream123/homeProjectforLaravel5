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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

//Route::get('post/create', ['as' => 'post.create', 'users' => 'PostController@create']);
//Route::get('post', ['as'        => 'post.store', 'users' => 'PostController@store']);
//Route::get('post/{post}', ['as' => 'post.show', 'users' => 'PostController@show']);
//Route::get('post/edit', ['as'   => 'post.edit', 'users' => 'PostController@edit']);
//Route::get('post/{post}', ['as' => 'post.update', 'users' => 'PostController@update']);

$router->resource('post', 'PostController');
