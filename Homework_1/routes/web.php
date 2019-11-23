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

Route::group(['namespace' => 'Front'],function(){
    Route::resource('property-type','PropertyTypeController');
    Route::resource('property-status','PropertyStatusController');
    Route::resource('property','PropertyController');
    Route::resource('property-price-history','PropertyPriceHistoryController');
    Route::resource('shape','ShapeController');
    Route::resource('zone','ZoneController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
