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

Route::get('/', function () { return view('welcome'); })
    ->name('home');
Route::get('/projects', function() { return view('projects'); })
    ->name('projects');

Route::get('/linux', 'LinuxController@index')
    ->name('linux');
Route::get('/linux/midterm', 'LinuxController@midterm')
    ->name('linux-midterm');
Route::get('/linux/final', function() { return view('linux.final'); })
    ->name('linux-final');

Route::get('/nutrition', function() { return view('walking.nutrition'); })
    ->name('fitness');
Route::get('/cvd', function() { return view('walking.cvd'); })
    ->name('cvd');
Route::get('/git', function() { return view('git'); })
    ->name('git');

Route::get('/fantasy', function() { return view('fantasy.main'); })
    ->name('fantasy');
Route::post('/fantasy', 'FantasyController@calculateWeeklyStats')
    ->name('fantasy.calculate');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@showPost');

Route::get('{folder}/{view}/md', 'MarkdownPagesController@markdownView');
