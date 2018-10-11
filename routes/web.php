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

Route::get('/', 'User\WelcomeController@home')->name('welcome');

//All destination 
Route::get('/dest', 'User\WelcomeController@dest')->name('dest.index');

//destination detail show 
Route::get('/dest/{id}','User\WelcomeController@dest_show')->name('dest.show');

//For user.hotel
Route::get('/hotel','User\HotelController@index')->name('user.hotel');
Route::get('/hotel/city/{id}','User\HotelController@hotel_city')->name('user.hotel.city');
Route::get('/hotel/star/{id}','User\HotelController@hotel_star')->name('user.hotel.star');

Route::get('/hotel/{id}','User\HotelController@hotel_room')->name('user.hotel.room');

Route::get('/review',function(){
    return view('hotel.review');
});

Route::prefix('admin')->group(function () {

    Route::get('/','Admin\AdminController@home')->name('admin.home');
    
    Route::resource('city','Admin\CityController');
    Route::resource('hotel','Admin\HotelController');
    Route::resource('destination','Admin\DestinationController');
    Route::resource('room','Admin\RoomController');
});
