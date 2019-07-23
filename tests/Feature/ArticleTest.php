<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\Article;

class ArticleTest extends TestCase {

 use RefreshDatabase;

 public function test_AuthUser_CanInsertArticles_HasArticle() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );

  $article = factory( Article::class )->make();
  $response = $this->post( route( 'articles.store' ), $article->toArray() );

  $this->assertDatabaseHas( 'articles', [
   'user_id'=>$user->id,
   'title'=>$article->title
  ] );
 }

 public function test_AuthUser_CanSoftDeleteArticles_IsSoftDeleted() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $article = factory( Article::class )->create( [ 'user_id'=>$user->id ] );

  $response = $this->delete( route( 'articles.destroy', $article ) );

  $this->assertSoftDeleted( 'articles', [ 'id'=>$article->id ] );
 }

 public function test_Articles_CanBePublished_NotNullPublished() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $article = factory( Article::class )->create( [ 'user_id'=>$user->id ] );

  $response = $this->post( route( 'articles.publish', $article ) );

  $this->assertTrue( Article::first()->isPublished() );
 }

 public function test_Articles_CanBeUnPublished_NullPublished() {
  $user = factory( User::class )->create();
  $this->actingAs( $user );
  $article = factory( Article::class )->create( [ 'user_id'=>$user->id ] );
  $this->post( route( 'articles.publish', $article ) );

  $response = $this->delete( route( 'articles.unpublish', $article ) );

  $this->assertFalse( Article::first()->isPublished() );
 }
}
