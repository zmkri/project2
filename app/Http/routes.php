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

// Route::get('/', function () {
//     return view('index');
// });
Route::group(['middleware' => ['web']], function () {
	Route::get('/', function () {
	    return view('welcome');
	})->name('home');

	Route::get('/login', [
		'uses' => 'UserController@getLogin',
		'as' => 'login'
	]);

	Route::post('/signin', [
		'uses' => 'UserController@postSignIn',
		'as' => 'post.signin',
	]);

	Route::get('/signout',[
	    'uses' => 'UserController@postSignOut',
	    'as' => 'signout'
	]);

	Route::get('/order', [
		'uses' => 'UserController@getOrder',
		'as' => 'order',
		'middleware' => 'auth'
	]);

	Route::post('/orderpost', [
	        'uses' => 'UserController@postOrder',
	        'as' => 'post.order',
	        'middleware' => 'auth'
	]);

	Route::get('/orderHistory', [
		'uses' => 'UserController@getOrderHistory',
		'as' => 'orderHistory',
		'middleware' => 'auth'
	]);


	// Admin Controller Functions
	Route::get('/admin', [
		'uses' => 'AdminController@getAdmin',
		'as' => 'admin',
		'middleware' => 'auth'
	]);

	Route::get('/onbehalf', [
		'uses' => 'AdminController@getOnBehalf',
		'as' => 'onbehalf',
		'middleware' => 'auth'
	]);

	Route::post('/orderAdminpost', [
	        'uses' => 'AdminController@postAdminOrder',
	        'as' => 'post.orderAdmin',
	        'middleware' => 'auth'
	]);

	Route::get('/todays-list', [
		'uses' => 'AdminController@getTodaysList',
		'as' => 'todays-list',
		'middleware' => 'auth'
	]);

	Route::get('/addfood', [
		'uses' => 'AdminController@getAddFood',
		'as' => 'addfood',
		'middleware' => 'auth'
	]);

	Route::post('/addfoodpost', [
		'uses' => 'AdminController@postAddFood',
		'as' => 'post.addfood',
		'middleware' => 'auth'
	]);

	Route::get('/old-list', [
		'uses' => 'AdminController@getOldList',
		'as' => 'old-list',
		'middleware' => 'auth'
	]);

	Route::get('/addstaff', [
		'uses' => 'AdminController@getAddStaff',
		'as' => 'addstaff',
		'middleware' => 'auth'
	]);

	Route::post('/addstaffpost', [
		'uses' => 'AdminController@postAddStaff',
		'as' => 'post.addstaff',
		'middleware' => 'auth'
	]);
});