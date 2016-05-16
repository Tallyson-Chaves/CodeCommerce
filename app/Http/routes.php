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

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);

Route::get('/exemplo', 'ExemploController@exemplo');

//:::::::::::::Admin Routes::::::::::::::::

Route::group(['prefix' => 'admin', 'as' => 'admin::'], function(){

	//:::::::::::::Categories Routes::::::::::::::::
	
	Route::get('categories/{id?}', ['as' => 'categories', 'uses' => 'AdminCategoriesController@index']);

	Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'AdminCategoriesController@create']);

    Route::get('categories/{id?}/destroy', ['as' => 'categories.destroy', 'uses' => 'AdminCategoriesController@destroy']);

	Route::post('categories', ['as' => 'category.store', 'uses' => 'AdminCategoriesController@store']);
	
	Route::get('categories/{id?}/push', ['as' => 'category.push', 'uses' => 'AdminCategoriesController@push']);

	Route::put('categories/{id?}/update', ['as' => 'category.update', 'uses' => 'AdminCategoriesController@update']);

	//:::::::::::::Products Routes::::::::::::::::

	Route::get('products/{id?}', ['as' => 'products', 'uses' => 'AdminProductsController@index']);

	Route::get('products/create', ['as' => 'products.create', 'uses' => 'AdminProductsController@create']);

	Route::get('products/{id?}/destroy', ['as' => 'products.destroy', 'uses' => 'AdminProductsController@destroy']);

	Route::post('products', ['as' => 'products.store', 'uses' => 'AdminProductsController@store']);

	Route::get('products/{id?}/push', ['as' => 'products.push', 'uses' => 'AdminProductsController@push']);

	Route::put('products/{id?}/update', ['as' => 'products.update', 'uses' => 'AdminProductsController@update']);

});


