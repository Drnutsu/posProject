<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::model('products','Products');

Route::get('/product','ProductsController@productsHome');

Route::get('/product/create','ProductsController@productsCreate');

Route::get('/product/edit','ProductsController@productsEdit');

Route::get('/product/delete','ProductsController@productsDelete');