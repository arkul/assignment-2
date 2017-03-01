<?php

namespace Assignment2;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'description', 'user_id'];

    //TODO: validation
    public function scopeFilter($query, $filters)
    {
      if($month = $filters['month'])
      { //whereMonth expects an integer... we can use Carbon or php... let's use php
	$query->whereMonth('created_at', date_parse($month)['month']);
      }
      if($year = $filters['year'])
      { $query->whereYear('created_at', $year);
      }
    }

    public function comments()
    {
      //Post object instance references many Comment objects within the database
      return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
//       $this->comments()->create(compact('body')); //whyyyy doesn't this work...
      $comment = new Comment;
      $comment->body = $body;
      $comment->post_id = $this->id;
      $comment->user_id = auth()->user()->id;
      $comment->save();
    }

    public function user() //allows us to use $post->user or $comment->post->user
    {
      return $this->belongsTo(User::class);
    }

    public static function archives()
    {
      return static::selectRaw('count(*) "published", trim(both from to_char(created_at, \'Month\')) "month", trim(both from to_char(created_at, \'YYYY\')) "year"')
	  ->groupBy('month','year')
	  ->orderByRaw('min(created_at) desc')
	  ->get()
	  ->toArray();
    }
}
