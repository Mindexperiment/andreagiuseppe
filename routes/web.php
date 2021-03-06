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
Route::get( '/articoli', 'WebsiteController@articoli' )->name( 'website.articoli' );
Route::get( '/articoli/{article}', 'WebsiteController@articolo' )->name( 'website.articolo' );

// Account
Route::get( '/account', 'AccountController@index' )->name( 'account.index' );

// Articles
Route::post( '/articles/store', 'ArticlesController@store' )->name( 'articles.store' );
Route::post( '/articles/{article}/publish', 'ArticlesController@publish' )->name( 'articles.publish' );
Route::patch( '/articles/{article}', 'ArticlesController@update' )->name( 'articles.update' );
Route::delete( '/articles/{article}', 'ArticlesController@destroy' )->name( 'articles.destroy' );
Route::delete( '/articles/{article}/publish', 'ArticlesController@unpublish' )->name( 'articles.unpublish' );
Route::get( '/articles', 'ArticlesController@index' )->name( 'articles.index' );
Route::get( '/articles/create', 'ArticlesController@create' )->name( 'articles.create' );
Route::get( '/articles/{article}/edit', 'ArticlesController@edit' )->name( 'articles.edit' );
