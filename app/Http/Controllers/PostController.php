<?php

namespace Assignment2\Http\Controllers;

use Illuminate\Http\Request;
use Assignment2\Post;
use Mews\Purifier\Facades\Purifier;

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
    $this->validate(request(),[ 'title'		=> 'required|min:5|regex:/^[a-zA-Z0-9-\x20]+$/', //alphabetic, alphanumeric, dashes, & spaces
				'description'	=> 'required|min:5',
				'body'		=> 'required|min:5']);
    $newdesc = Purifier::clean(request('description'), 'rules_blogdesc', false);
    $newbody = Purifier::clean(request('body'), array("HTML.SafeIframe"	=> 'true',
						  "URI.SafeIframeRegexp"=> "%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%"), true);
    //custom stuff: return to previous page if description or body are empty after purification
    if(empty($newdesc))
      return back()->withErrors(['message' => 'Your blog description is completely invalid, please try again']);
    else if(empty($newbody))
      return back()->withErrors(['message' => 'Your blog content is completely invalid, please try again']);

    auth()->user()->publish( new Post( array('title' => request('title'), 'description' => $newdesc, 'body' => $newbody) ));
    return redirect('/');
  }
}
