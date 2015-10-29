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

Route:: get('/', [
	         'as' =>'home',
	         'uses' =>'FrontController@index' ]);

Route:: get('/admin/index', [
	         'as' =>'administrador',
	         'uses' =>'FrontController@admin' ]);


Route::group(['prefix' => 'admin'], function() {
	Route::resource('users','UsersController');
	Route::resource('categories','CategoriesController');
	Route::resource('articles','ArticlesController');


	

});

