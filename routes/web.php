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

Route::get('login','LoginController@showLogin');
Route::post('checklogin','LoginController@doLogin');
Route::get('register','RegisterController@showRegister');
Route::post('register','RegisterController@doRegister');
Route::get('home','HomeController@goHome');
Route::get('request','RequestController@goToRequest');
Route::post('createrequest',"RequestController@createRequest");
Route::get('viewrequest','ViewRequestController@showRequestStatus');
Route::get('requesthandler','RequestHandlerController@showAllRequest');
Route::post('accept','RequestHandlerController@acceptRequest');
Route::post('reject','RequestHandlerController@rejectRequest');
Route::get('logout','LoginController@logout');
Route::get('newrequest','RequestController@newRequest');