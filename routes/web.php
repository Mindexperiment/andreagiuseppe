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

// Articles
Route::post( '/articles/store', 'ArticlesController@store' )->name( 'articles.store' );
Route::post( '/articles/{article}/publish', 'ArticlesController@publish' )->name( 'articles.publish' );
Route::delete( '/articles/{article}', 'ArticlesController@destroy' )->name( 'articles.destroy' );
Route::delete( '/articles/{article}/publish', 'ArticlesController@unpublish' )->name( 'articles.unpublish' );
Route::get( '/articles', 'ArticlesController@index' )->name( 'articles.index' );
Route::get( '/articles/create', 'ArticlesController@create' )->name( 'articles.create' );
