<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model {

 use SoftDeletes;

 /**
  * The table associated with the model.
  *
  * @var string
  */
 protected $table = 'articles';

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [ 'user_id', 'title', 'body', 'published_at' ];

 /**
  * The attributes that should be cast to native types.
  *
  * @var array
  */
 protected $casts = [
  'published_at' => 'datetime',
 ];


 // - relations

 /**
  * An adv belongs to a business
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function owner() {
  return $this->belongsTo( User::class, 'user_id' );
 }
}
