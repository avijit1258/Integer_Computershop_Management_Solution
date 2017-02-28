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
//Route::get('/purchase','HomeController@purchase');
//Route::get('/catagory','HomeController@catagory');
//Route::post('/catagory/create','HomeController@storeCatagory');
//Route::get('/catagory/create','HomeController@catagory');
//Route::get('/product','HomeController@product');

Route::get('/sub_catagories', 'SubCatagoryController@index');
