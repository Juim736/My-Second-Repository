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

Route::get('/pk', function () {
    return view('welcome');
});

Route::group(['middleware' => 'visitors'], function(){
	Route::get('/pk-login', function () {
    return view('pk.login.login');
	});
	Route::get('/sign-up-form',function(){
		return view('pk.login.sign-up');
	});

	Route::post('/sign-up-post','PkAuthController@signup');
	Route::post('/login-pk','PkAuthController@signin');

});

Route::group(['middleware' => 'auth'],function(){

	Route::post('signout','PkAuthController@signout')->name('signout');
	Route::get('/pk-friends','PkController@pk');
	Route::get('/pk-jim',function(){
		return "jim";
	})->name('jim');
	Route::post('/pk-jim-tyy',function(){
		return "jim";
	})->name('pk-jim');

	Route::get('/blood','PkController@pkBlood');
	Route::group(['middleware' => 'administrator'],function(){
			
	});
	Route::group(['middleware' => 'pkadmin'],function(){
		Route::get('/users_of_pk','PkController@pkUsers');
	});
	
	Route::get('/education','PkController@pkEducation');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/groupBlood/{group}', 'PkController@groupBlood');
	Route::get('/medical-care', 'PkController@medicalCare');
	Route::get('/table','DatatablesController@getIndex');
	Route::get('/pk-table','DatatablesController@anyData')->name('datatables.data');
	// Route::get('/pk-table','DatatablesController@anyData');
	Route::get('/emergency-pk','PkController@emergency');
	Route::get('/supoort-pk','PkController@support');
	Route::get('/create-event','PkController@createEvent');
	Route::get('/pkTeam','PkController@pkTeam');
	Route::get('/user-profile','PkController@userProfile');
	Route::get('/getData','PkController@getAllUser');

});


Auth::routes();