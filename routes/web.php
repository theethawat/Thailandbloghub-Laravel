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



//Route::get('myview/index','Thailandbloghubcontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adding', 'ThailandbloghubController@adding');
Route::get('/', 'ThailandbloghubController@index');
Route::post('/addissue', 'ThailandbloghubController@addissue');


Route::get('/catagory/{cat}','Thailandbloghubcontroller@catagorylist');