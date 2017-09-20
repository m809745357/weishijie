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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/tidings', 'TidingController@index')->name('tidings');
Route::get('/tidings/{tiding}', 'TidingController@show')->name('tiding');

Route::get('/teachers', 'TeacherController@index')->name('teachers');

Route::get('/courses', 'CourseController@index')->name('courses');
Route::get('/courses/{course}', 'CourseController@show')->name('course');

Route::get('/curricula', 'CurriculumController@index')->name('curricula');
Route::get('/curricula/{curriculum}', 'CurriculumController@show')->name('curriculum');

Route::get('/witnesses', 'WitnessController@index')->name('witnesses');

Route::get('/witnesses/{witness}', 'WitnessController@show')->name('witness');

Route::get('/careers', 'CareerController@index')->name('careers');

Route::get('/aboutus', 'AboutController@index')->name('aboutus');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
