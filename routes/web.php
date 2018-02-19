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
})->name('welcome');

Auth::routes();

Route::get('/register', 'Controller@admin')->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/members', 'HomeController@members')->name('members');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/admin', 'Controller@admin')->name('admin');

// all routes for member management
Route::get('/mm', 'Controller@manageMembers')->name('manageMembers');
Route::get('/mmf', 'Controller@manageMembers_firstname')->name('manageMembers_firstname');
Route::get('/addmember', 
  ['as' => 'addmember', 'uses' => 'Controller@addMember']);
Route::post('/storemember', 
  ['as' => 'storemember', 'uses' => 'HomeController@storeMember']);
Route::get('/deleteMember/{id}', ['uses' => 'Controller@deleteMember']);
Route::get('/updateMember/{id}', ['uses' => 'Controller@updateMember']);
Route::post('/savememberupdate', 
  ['as' => 'savememberupdate', 'uses' => 'HomeController@saveMemberUpdate']);

// all outes for alumni management 
Route::get('/am', 'Controller@manageAlumni')->name('manageAlumni');
Route::get('/amf', 'Controller@manageAlumni_firstname')->name('manageAlumni_firstname');
Route::get('/addalumni', 
  ['as' => 'addalumni', 'uses' => 'Controller@addAlumni']);
Route::post('/storealumni', 
  ['as' => 'storealumni', 'uses' => 'HomeController@storeAlumni']);
Route::get('/deleteAlumni/{id}', ['uses' => 'Controller@deleteAlumni']);
Route::get('/updateAlumni/{id}', ['uses' => 'Controller@updateAlumni']);
Route::post('/savealumniupdate', 
  ['as' => 'savealumniupdate', 'uses' => 'Controller@saveAlumniUpdate']);

// route for search request (on management pages)
Route::post('/searchm', ['as' => 'searchm', 
	'uses' => 'Controller@searchm']);
Route::post('/searcha', ['as' => 'searcha', 
	'uses' => 'Controller@searcha']);






