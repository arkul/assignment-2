@extends('layouts.master')

<<<<<<< HEAD
@section('page-title')
::Blog Post::
@endsection

@section('nav-items')

<!--
**************************************
NAV ITEMS
**************************************
-->
<ul class="nav navbar-nav">
  <li><a href="/about">About</a></li>
  <li><a href="/contact">Contact</a></li>
</ul>
<!--
**************************************
END NAV ITEMS
**************************************
-->

@endsection

@section('page-body')

<div class="container">
<div class="blog-header">
<h1 class="blog-title">{{ $post->title }}</h1>
<p class="lead blog-description">{{ $post->description }}</p>
</div>
<div class="row">
<div class="col-sm-8 blog-main">
<div class="blog-post">
{{ $post->body }}
</div>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{-- $post->user->name --}}</a></p>
</div> <!-- /.blog-main -->
@include('layouts.sidebar')
</div><!-- /.row -->
</div><!-- /.container -->

<div class="container">

{{-- List comments --}}
=======
@section('blog-title')
The Bootstrap Blog
@endsection

@section('blog-description')
The official example template of creating a blog with Bootstrap.
@endsection

@section('blog-posts')
@include('posts.post')
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
<hr />
<div class="comments">
  <ul class="list-group">
  @foreach ($post->comments as $comment)
    <li class="list-group-item">
      <strong>{{ $comment->created_at->diffForHumans() }}:</strong>&nbsp;
      {{ $comment->body }}
    </li>
  @endforeach
  </ul>
</div>

<<<<<<< HEAD
@if(Auth::user())
=======
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
{{-- Add a comment --}}
<hr/>
@include('layouts.errors')
<div class="card">
  <div class="card-block">
    <form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
      <div class="form-group">
	<textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
      </div>
      <div class="form-group">
	<button type="submit" class="btn btn-primary">Add Comment</button>
      </div>
    </form>
  </div>
</div>
<<<<<<< HEAD
@endif

</div>
=======
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
@endsection