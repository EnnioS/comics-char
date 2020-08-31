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

/*Created by 
Ennio Sáenz */

Route::get('/','HomeController@index');// Display view home page

Route::get('/search','SearchController@search_by_name')->name('search.by_name'); // Display view home and results from another pages

Route::get('/details/{id}', 'DetailsController@detailPage')->name('char_details');// Display character details by ID

