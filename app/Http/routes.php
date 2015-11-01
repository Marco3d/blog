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

/*Route:: get('/admin/login', [
	         'as' =>'administrador',
	         'uses' =>'FrontController@logindex' ]);*/





Route::group(['prefix' => 'admin'], function() {
	Route::resource('users','UsersController');
	Route::resource('categories','CategoriesController');
	Route::resource('articles','ArticlesController');

	/*rutas para eliminar registros directamente en el index*/
	Route::get('users/{id}/destroy',[
			'uses' => 'UsersController@destroy',
			'as'   => 'admin.users.destroy'	
		]);

	Route::get('categories/{id}/destroy',[
			'uses' => 'CategoriesController@destroy',
			'as'   => 'admin.categories.destroy'	
		]);

	Route::get('articles/{id}/destroy',[
			'uses' => 'ArticlesController@destroy',
			'as'   => 'admin.articles.destroy'	
		]);
	
});

/*rutas para autenticar*/

Route::resource('log','LogController');
Route::get('logout','LogController@logout');