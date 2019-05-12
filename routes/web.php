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
    return view('frontpage');
});

// Route::get('/', function(){
// 	return view('dataAdmin/index');
// });


Route::group([
	'middleware'=>'auth:datacollector',
	], function () {
	Route::resource('homeowner', 'DataCollector\HomeOwnerController');
});
Route::resource('housedetail', 'DataCollector\HouseDetailController');

//municiplayi routes
Route::group([
	'namespace' => 'Municipality\Auth',
	'middleware' => ['auth:municipality'],
	'as'=>'municipality.', // for name ->name('municipality.login'); becomes ->name('login');
	'prefix'=>'municipality' // Route::get('/municipality','LoginController@showloginForm') becomes Route::get('/','LoginController@showloginForm')
], function () {

	Route::get('/municipality','LoginController@showloginForm')->name('login');
	Route::post('/municipality/municipality-login','LoginController@login')->name('login.post');
	Route::post('/municipality/municipality-logout','LoginController@logout')->name('logout');
});

Route::get('datacollector','DataCollector\Auth\LoginController@showloginForm');

// Route::group([
// 	'namespace' => 'DataCollector\Auth',
// 	'as'=>'datacollector.', // for name ->name('municipality.login'); becomes ->name('login');
// 	'prefix'=>'datacollector' // Route::get('/municipality','LoginController@showloginForm') becomes Route::get('/','LoginController@showloginForm')
// ], function () {

// 	Route::get('/','LoginController@showloginForm')->name('login');
// 	Route::post('/data-login','LoginController@login')->name('login.post');
// 	Route::post('/data-logout','LoginController@logout')->name('logout');
// });

Auth::routes();



///////////// Changes done by users will be logged in a sepearte table having user_id, table_name, change_id ,chanegd _attribute,prev_value, new_value..///////// We have multiple user table. so think somethng about it.///////////////

////////////Nxt change, make a temp data table to find upto which form has a data collector filled. ./..///////////////
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
