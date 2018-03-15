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

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/systems', 'HomeController@system');
Route::get('/cart', 'HomeController@cart');
Route::get('/contact', 'HomeController@contact');
Route::get('/login', 'HomeController@login');

Route::get('/backend/login', 'AdminController@login');
Route::get('/backend/logout', 'AdminController@logout');
Route::post('/backend/prelogin', 'AdminController@validateUser');

Route::group(['middleware' => ['admin']],function(){
	Route::get('/backend/dashboard', 'AdminController@dashboard');
	Route::get('/backend', 'AdminController@index');
	Route::get('/backend/modules', 'AdminController@modules');
	Route::get('/backend/systems', 'AdminController@systems');

	Route::post('/backend/module/update', 'AdminController@updateModule');
	Route::post('/backend/system/update', 'AdminController@updateSystem');
	Route::post('/backend/delete', 'AdminController@onDelete');
});

Route::get('/addtocart','HomeController@addToCart');
Route::post('/placeorder','HomeController@placeOrder');