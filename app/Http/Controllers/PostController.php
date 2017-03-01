<?php

namespace Assignment2\Http\Controllers;

use Illuminate\Http\Request;
use Assignment2\Post;

class PostController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['index','show']);
  }

  public function index()
  {
    $posts = Post::latest()->filter(request(['month', 'year']))->get();
    return view('posts.index', compact('posts', 'archives'));
  }

  public function show($id)
  {
    $post = Post::find($id);
    return view('posts.show', compact('post'));
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store()
  {
    ////////////////////////
    //VALIDATION
    //see: https://laravel.com/docs/5.4/validation#available-validation-rules
    //when validation fails, post back to the same page with a populated
    //$errors variable
    ////////////////////////
    $this->validate(request(),[ 'title'		=> 'required|min:5',
				'description'	=> 'required|min:5',
				'body'		=> 'required']);
    auth()->user()->publish(new Post(request(['title','description','body'])));
    return redirect('/');
  }
}
