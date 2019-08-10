<?php

namespace App\Http\Controllers;

use App\Article;

class WebsiteController extends Controller {

 public function homepage() {
  return view( 'website.homepage' );
 }

 public function speeches() {
  $articles = Article::published()->get();

  return view( 'layouts.wrapper', [ 'page'=>'website.speeches-page' ] )
   ->with( 'articles', $articles );
 }

 public function speech( Article $article ) {
  return view( 'layouts.wrapper', [ 'page'=>'website.speech-page' ] )
   ->with( 'article', $article );
 }
}
