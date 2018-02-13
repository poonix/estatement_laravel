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


Route::get('/', function () {
    return view('welcome',['name'=>'yudhi']);
});*/
Route::redirect('/sso', 'http://103.76.17.197/SSO_WebService/login.php?source=http://localhost/estatement_laravel/public/check_user&app_code=EVENT');
Route::get('/check_user', 'Auth\LoginController@index');
Route::group(['middleware'=>['checklogin']],function(){
	Route::get('/', 'DashboardController@dashboard');
	Route::get('/dashboard','DashboardController@dashboard');
	Route::get('/logout','UserController@logout');
	Route::get('/col', 'CollectionCallController@GetList');
});