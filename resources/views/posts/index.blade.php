@extends('layouts.master')

@section('blog-title')
The Bootstrap Blog
@endsection

@section('blog-description')
The official example template of creating a blog with Bootstrap.
<form method="POST" action="/logout">
{{ csrf_field() }}
<button type="submit">Logout</button>
</form>
@endsection

@section('blog-post-title')
Sample blog post
@endsection

@section('blog-post-date')
January 1, 2014
@endsection

@section('blog-post-author')
Mark
@endsection

@section('blog-posts')
  @foreach ($posts as $post)
    @include('posts.post')
  @endforeach
@endsection