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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/car-search','HomeController@carSearch')->name('car_search');
Route::get('/how-it-works','HomeController@howItWorks')->name('how_it_works');
Route::get('/contact','HomeController@contact')->name('contact');