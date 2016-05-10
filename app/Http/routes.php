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

Route::pattern('id', '[0-9]+');

Route::get('/', 'IndexController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin::'], function(){
	
	Route::get('categories/{id?}', ['as' => 'categories', 'uses' => 'AdminCategoriesController@index']);

	Route::get('products/{id?}', ['as' => 'products', 'uses' => 'AdminProductsController@index']);

});


