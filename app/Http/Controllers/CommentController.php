<?php

namespace Assignment2\Http\Controllers;

use Illuminate\Http\Request;
use Assignment2\Post;
use Assignment2\Comment;

class CommentController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  //TODO: validation
  public function store(Post $post)
  {
    $this->validate(request(), ['body' => 'required|min:5']);
    $post->addComment(request('body'));

    return back(); //return to the previous page
  }
}
