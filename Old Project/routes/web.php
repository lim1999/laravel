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
Route::resource('contact','ContactController');
Route::resource('products','Front\ProductController');
Route::resource('productsCategories','ProductCategoriesController');
Route::resource('prductsStatuses','ProductStatusesController');
Route::resource('productHistories','ProductHistoriesController');
Route::get('/', function () {
    return view('welcome');
});
// Route::prefix('laravel_test')->group(function(){
    
// });
