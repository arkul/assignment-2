@extends('layouts.master')

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
<p class="lead blog-description">{!! $post->description !!}</p>
</div>
<div class="row">
<div class="col-sm-8 blog-main">
<div class="blog-post">
{!! $post->body !!}
</div>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>
</div> <!-- /.blog-main -->
@include('layouts.sidebar')
</div><!-- /.row -->
</div><!-- /.container -->

<div class="container">

{{-- List comments --}}
<hr />
<div class="comments">
  <ul class="list-group">
  @foreach ($post->comments as $comment)
    <li class="list-group-item">
      <strong>{{ $comment->created_at->diffForHumans() }}, <a href="#">{{ $comment->user->name }}</a> wrote:</strong>&nbsp;
      {{ $comment->body }}
    </li>
  @endforeach
  </ul>
</div>

@if(Auth::user())
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
@endif

</div>
@endsection