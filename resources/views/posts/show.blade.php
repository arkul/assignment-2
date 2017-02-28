@extends('layouts.master')

@section('blog-title')
The Bootstrap Blog
@endsection

@section('blog-description')
The official example template of creating a blog with Bootstrap.
@endsection

@section('blog-posts')
@include('posts.post')
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
@endsection