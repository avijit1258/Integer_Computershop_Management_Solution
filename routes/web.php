<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/sub_catagories', 'SubCatagoryController@index');
	Route::get('/sub_catagories/{id}/edit', 'SubCatagoryController@edit');
	Route::post('/sub_catagories', 'SubCatagoryController@store');
	Route::put('/sub_catagories/{id}', 'SubCatagoryController@update');
	Route::delete('/sub_catagories/{id}','SubCatagoryController@destroy');


	Route::post('/catagories', 'CatagoryController@store');
	Route::get('/catagories','CatagoryController@index');
	Route::delete('/catagories/{id}','CatagoryController@destroy');


	Route::post('/products', 'ProductController@store');
	Route::get('/products','ProductController@index');
	Route::delete('/products/{id}','ProductController@destroy');

	Route::post('/brands', 'BrandController@store');
	Route::get('/brands','BrandController@index');
	Route::delete('/brands/{id}','BrandController@destroy');

	Route::get('/vendors', 'VendorController@index');
	Route::post('/vendors', 'VendorController@store');
	Route::delete('/vendors/{id}','VendorController@destroy');

	Route::get('/sells', 'SellController@index');


	Route::get('/purchases', 'PurchaseController@index');
	Route::post('/sells', 'SellController@store');
	Route::delete('/sells/{id}', 'SellController@store');

	Route::get('/subcatagories_of_catagory/{id}', 'SubCatagoryController@cat_to_sub'); 
    
});

