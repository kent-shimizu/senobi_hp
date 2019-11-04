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

Route::get('/', 'HomeController@index');
Route::get('/company', 'HomeController@company');
Route::get('/greeting', 'HomeController@greeting');
Route::get('/organization_chart', 'HomeController@organizationChart');
Route::get('/accommodation_division', 'HomeController@accommodationDivision');
Route::get('/estate_division', 'HomeController@estateDivision');
Route::get('/privacy_policy', 'HomeController@privacyPolicy');

Route::get('/news', 'NotificationController@news');
Route::get('/recruit', 'NotificationController@recruit');
Route::get('/contact', 'NotificationController@contact');