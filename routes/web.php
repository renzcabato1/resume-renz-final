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


Route::get('/resume','InformationController@resume')->name('home');
Route::get('/portfolio','InformationController@resume');
Route::get('/contact','InformationController@resume');
Route::get('/skills','InformationController@resume');
Route::get('/history','InformationController@resume');

Auth::routes();
Route::group( ['middleware' => 'auth'], function()
{
Route::get('/','InformationController@home')->name('home');
});
