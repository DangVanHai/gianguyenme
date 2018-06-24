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

// =============================================

Route::group(['namespace'=>'backend'], function(){
	Route::group(['prefix'=>'admin'], function(){
		Route::get('/','ViewController@getDashboard');

		Route::group(['prefix'=>'users'], function(){
			Route::group(['prefix'=>'employees'], function(){
				Route::get('/','ViewController@getUserEmployees');
				Route::get('del/{id}','ViewController@getDelEmployees');
				Route::get('show/{id}','ViewController@getShowEmployees');
			});
			Route::get('users','ViewController@getUserInfo');
			Route::get('guest','ViewController@getUserGuest');
			Route::group(['prefix'=>'add'], function(){
				Route::get('/','ViewController@getAddUser');
				Route::post('/','ViewController@postAddUser');
			});
		});
		Route::group(['prefix'=>'products'], function(){
			Route::get('show','ViewController@getShowProduct');
			Route::get('add','ViewController@getAddProduct');
			Route::get('asd','ViewController@getAddProduct');
			
		});
		Route::group(['prefix'=>'categories'], function(){
			Route::group(['prefix'=>'add'], function(){
				Route::get('/','CategoryController@getAddCategory');
				Route::post('/','CategoryController@postAddCategory');
			});

			Route::get('show','CategoryController@getShowCategory');
			Route::get('del/{id}','CategoryController@getDelCategory');
			Route::group(['prefix'=>'edit/{id}'], function(){
				Route::get('/','CategoryController@getEditProduct');
				Route::post('/','CategoryController@postEditProduct');
			});
			
		});
		
	});
});
