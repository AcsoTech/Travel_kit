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




Route::get('/hotel', function () {
    return view('hotel.home');
});

Route::get('/room',function(){
    return view('hotel.room');

});

Route::get('/review',function(){
    return view('hotel.review');
});

Route::prefix('admin')->group(function () {

    Route::get('/','Admin\AdminController@home')->name('admin.home');
    Route::resource('city','Admin\CityController');
    Route::resource('destination','Admin\DestinationController');
});
