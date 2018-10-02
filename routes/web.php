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

Route::get('/hotel', function () {
    return view('hotel.home');
});

Route::get('/room',function(){
    return view('hotel.room');

});

Route::get('/review',function(){
    return view('hotel.review');
});

Route::get('/admin','admin\adminController@index');

Route::get('/admin/create','admin\adminController@create');
Route::post('/admin/create','admin\adminController@store');
Route::get('/admin/create','admin\adminController@show');
Route::get('/admin/delete/{id}','admin\adminController@delete');
Route::get('/admin/edit/{id}','admin\adminController@edit');
Route::post('/admin/update/{id}','admin\adminController@update');

