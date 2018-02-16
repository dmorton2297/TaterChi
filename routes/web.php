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

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/admin', 'Controller@admin')->name('admin');

Route::get('/mm', 'Controller@manageMembers')->name('manageMembers');

Route::get('/addmember', 
  ['as' => 'addmember', 'uses' => 'Controller@addMember']);

Route::post('/storemember', 
  ['as' => 'storemember', 'uses' => 'HomeController@storeMember']);

Route::get('/deleteMember/{id}', ['uses' => 'Controller@deleteMember']);
Route::get('/updateMember/{id}', ['uses' => 'Controller@updateMember']);


