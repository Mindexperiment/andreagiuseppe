<?php

namespace App\Http\Controllers;

use App\Article;

class WebsiteController extends Controller {

 public function homepage() {
  return view( 'website.homepage' );
 }

 public function articoli() {
  $articles = Article::published()->get();

  return view( 'layouts.wrapper', [ 'page'=>'website.articoli-page' ] )
   ->with( 'articles', $articles );
 }

 public function articolo( Article $article ) {
  return view( 'layouts.wrapper', [ 'page'=>'website.articolo-page' ] )
   ->with( 'article', $article );
 }
}
