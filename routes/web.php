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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@about')->name('about');

Route::get('/orgs', 'OrgsController@orgs')->name('orgs');

Route::get('/timeline', 'TimelineController@index')->name('timeline');

// resource vs get
Route::resource('/timeline', 'TimelineController');

// Route::get('/comments', 'CommentController@index')->name('comments');
// resource vs get
Route::resource('/comments', 'CommentController');

// Route::get('/eventlist', 'EventsListController@index')->name('eventlist');

Route::resource('/eventlist', 'EventsListController');

Route::resource('/igps', 'IGPController');

Route::get('/eventArticle', 'EventArticleController@index')->name('eventArticle');