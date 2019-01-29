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


Route::get('/', 'VisitorController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/signin', 'VisitorController@signin');

Route::get('/signup', 'VisitorController@signup');

Route::get('/reset-password', 'VisitorController@resetPassword');

Route::get('/events', 'VisitorController@events');

Route::get('/event-details', 'VisitorController@eventDetails');

Route::get('/clubs-societies', 'VisitorController@clubs');

Route::get('/about-club', 'VisitorController@aboutClub');

Route::get('/blog', 'VisitorController@blog');

Route::get('/blogpost-detail', 'VisitorController@blogpost');

Route::get('/about-us', 'VisitorController@aboutUs');

Route::get('/things-to-do', 'VisitorController@thingsToDo');


