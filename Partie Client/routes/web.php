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


Route::namespace('Client')->prefix('client')->as('client.')->middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    
    Route::resource('/evenements', 'EvenementsController');
    Route::resource('/details', 'DetailsController');
    Route::resource('/inscrits', 'InscritsController');
    Route::resource('/contacts', 'ContactsController');
  
});