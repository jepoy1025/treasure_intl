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

Route::get('/home', 'HomeController@index')->name('home');
//Codes Controller
Route::get('/Codes','CodeController@index')->name('code');
Route::get('/generate','CodeController@generateCode')->name('generate');
Route::get('/verify','UserController@verifyCode')->name('userId');
