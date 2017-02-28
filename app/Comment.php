<?php

namespace Assignment2;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['body', 'post_id'];

  public function post()
  {
    return $this->belongsTo(Post::class);
  }

  public function user() //allows us to use $comment->user->name
  {
    return $this->belongsTo(User::class);
  }
}
