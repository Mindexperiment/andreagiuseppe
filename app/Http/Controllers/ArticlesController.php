<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Auth;

class ArticlesController extends Controller {

 public function __construct() {
  $this->middleware( 'auth' );
 }

 public function store( Request $request ) {
  $this->validate( $request, [
   'title' => [ 'required', 'string', 'max:255' ],
   'body' => [ 'required', 'string' ],
  ] );

  $article = $request->user()->articles()->create( $request->all() );

  return redirect()->route( 'articles.index' );
 }

 public function update( Request $request, Article $article ) {
  $this->validate( $request, [
   'title' => [ 'required', 'string', 'max:255' ],
   'body' => [ 'required', 'string' ],
  ] );

  $article->update( $request->all() );

  return redirect()->route( 'articles.index' );
 }

 public function destroy( Article $article ) {
  $article->delete();

  return back();
 }

 public function publish( Request $request, Article $article ) {
  $article = $article->publish();

  if ( $request->wantsJson() ) {
   return $article;
  }

  return back();
 }

 public function unpublish( Request $request, Article $article ) {
  $article = $article->unpublish();

  if ( $request->wantsJson() ) {
   return $article;
  }

  return back();
 }


 // - view actions

 public function index() {
  $articles = Auth::user()->articles;

  return view( 'layouts.wrapper', [ 'page'=>'articles.index-page' ] )
   ->with( 'articles', $articles );
 }

 public function create() {
  return view( 'layouts.wrapper', [ 'page'=>'articles.create-page' ] );
 }

 public function edit( Article $article ) {
  return view( 'layouts.wrapper', [ 'page'=>'articles.edit-page' ] )
   ->with( 'article', $article );
 }
}
