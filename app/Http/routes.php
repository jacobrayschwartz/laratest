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


Route::resource('articles', 'ArticlesController');



Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('foo', ['middleware' => 'manager', function(){
    return 'This page can only be viewed by managers';
}]);