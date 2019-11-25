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
//Route::group(['middleware' => 'Auth'], function () {
    Route::resource('/property', 'Front\PropertyController')->middleware('auth');
    Route::resource('/property-type', 'Front\PropertyTypeController')->middleware('auth');
    Route::resource('/property-status', 'Front\PropertyStatusController')->middleware('auth');
    Route::resource('/shape', 'Front\ShapeController')->middleware('auth');
    Route::resource('/zone', 'Front\ZoneController')->middleware('auth');
    Route::resource('/property-price-history', 'Front\PropertyPriceHistoryController')->middleware('auth'); 
// });
//Route::resource('property', 'Front\PropertyController');