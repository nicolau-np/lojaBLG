<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login/facebook', 'SocialController@redirect');
Route::get('/login/facebook/callback', 'SocialController@callback');

Route::redirect('/', '/pt');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', "HomeController@index");
});