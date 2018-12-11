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

Route::get('/', array(
    'as' => 'dashboard',
    'uses' => 'DashboardController@index',
));

Route::get('/shortner', array(
    'as' => 'short',
    'uses' => 'ShortController@index',
));
Route::post('/shortner/make', array(
    'as' => 'make',
    'uses' => 'LinkController@make',
));
Route::get('/shortner/{code}', array(
    'as' => 'get',
    'uses' => 'LinkController@get',
));
