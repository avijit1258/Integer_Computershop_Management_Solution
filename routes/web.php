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

Auth::routes();

//Route::get('/home', 'HomeController@index');


Route::get('/sub_catagories', 'SubCatagoryController@index');
Route::post('/sub_catagories', 'SubCatagoryController@store');
Route::delete('/sub_catagories/{id}','SubCatagoryController@destroy');


Route::post('/catagories', 'CatagoryController@store');
Route::get('/catagories','CatagoryController@index');

Route::post('/products', 'ProductController@store');
Route::get('/products','ProductController@index');

Route::post('/brands', 'BrandController@store');
Route::get('/brands','BrandController@index');
Route::delete('/brands/{id}','BrandController@destroy');





