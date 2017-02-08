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

Route::get('/linux', 'LinuxController@index')->name('linux');
Route::get('/linux/midterm', 'LinuxController@midterm')->name('linux-midterm');
Route::get('/nutrition', function() { return view('walking.nutrition'); });
Route::get('/git', function() { return view('git'); });
