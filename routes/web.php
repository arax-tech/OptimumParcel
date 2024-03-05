<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () { return redirect('home'); });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'WebSite'], function(){
	Route::get('/home', 'HomeController@home');
	Route::get('/about', 'HomeController@about');
	Route::get('/tracking', 'HomeController@tracking');
	Route::get('/track', 'HomeController@track');
	Route::get('/contact', 'HomeController@contact');
	Route::post('/review', 'HomeController@review');
});


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@index');

Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@register');
Route::get('/verify', 'LoginController@VerifyUser');

/*Admin Routes*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth' => 'Admin']],function(){

	Route::get('/dashboard/', 'AdminController@dashboard');
	Route::get('/profile/', 'AdminController@profile');
	Route::post('/profile/', 'AdminController@profile');
	Route::get('/logout/', 'AdminController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	/*User CRUD*/
	Route::get('user', 'UserController@index');
	Route::post('user/store', 'UserController@store');
	Route::post('user/update/{id}', 'UserController@update');
	Route::get('user/delete/{id}', 'UserController@delete');

	/*Shipping CRUD*/
	Route::get('shipping', 'ShippingController@index');
	Route::post('shipping/store', 'ShippingController@store');
	Route::post('shipping/update/{id}', 'ShippingController@update');
	Route::get('shipping/delete/{id}', 'ShippingController@delete');

	Route::get('review/', 'ReviewController@index');
	Route::post('review/update/{id}', 'ReviewController@update');
	Route::get('review/delete/{id}', 'ReviewController@delete');

});

/*User Routes*/
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth' => 'User']],function(){

	Route::get('/dashboard/', 'UserController@dashboard');
	Route::get('/profile/', 'UserController@profile');
	Route::post('/profile/', 'UserController@profile');
	Route::get('/logout/', 'UserController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	/*Shipping CRUD*/
	Route::get('shipping', 'ShippingController@index');
	Route::post('shipping/store', 'ShippingController@store');
	Route::post('shipping/update/{id}', 'ShippingController@update');
	Route::get('shipping/delete/{id}', 'ShippingController@delete');

});





Route::get('cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    die("Cash Cleard");
});
