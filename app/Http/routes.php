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

use App\Post;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function ()
{

  Route::get('/', [
    'as'   => 'admin.index',
    'uses' => 'DashboardController@getIndex',
  ]);
});

Route::get('/', [
  'as'   => 'home',
  'uses' => 'WelcomeController@index'
]);

Route::get('{slug}', [
  'as'   => 'post.show',
  'uses' => 'WelcomeController@show'
]);

Route::bind('slug', function ($slug)
{
  return Post::whereSlug($slug)->firstOrFail();
});

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
