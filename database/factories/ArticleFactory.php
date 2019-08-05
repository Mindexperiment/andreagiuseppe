<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

use App\Article;
use App\User;

$factory->define( Article::class, function( Faker $faker ) {
 return [
  'user_id' => function() {
   return factory( User::class )->create()->id;
  },
  'title' => $faker->text(95),
  'body' => $faker->text(300),
  'published_at' => null,
 ];
} );
