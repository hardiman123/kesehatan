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

Route::get('/', function () {
    return view('welcome');
});



route::get('/about', 'WebController@about');
route::get('/home', 'WebController@Home');
route::get('/depan', 'WebController@depan');
route::get('/jelas', 'WebController@jelas');



route::get('/input', 'DataController@create')->middleware('auth');
route::get('/start', 'DataController@start')->middleware('auth');
route::get('/data', 'DataController@index')->middleware('auth');
route::get('/masuk', 'AuthController@masuk')->name('login');
route::post('/postlogin', 'AuthController@postlogin');
route::get('/logout', 'AuthController@logout');