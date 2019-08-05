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

Auth::routes();

// Website
Route::get( '/', 'WebsiteController@homepage' )->name( 'website.homepage' );
Route::get( '/speeches', 'WebsiteController@speeches' )->name( 'website.speeches' );
Route::get( '/speeches/{article}', 'WebsiteController@speech' )->name( 'website.speech' );

// Account
Route::get( '/account', 'AccountController@index' )->name( 'account.index' );
