@extends('layouts.master')

@section('page-title')
::Index::
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
<h1 class="blog-title">Blog list</h1>
<p class="lead blog-description">Here are the blogs</p>
</div>
<div class="row">
<div class="col-sm-8 blog-main">
<!-- blog posts go here -->
@foreach ($posts as $post)
<div class="blog-post">
<h2 class="blog-post-title">
<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
</h2>
<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{-- $post->user->name --}}</a></p>
{{ $post->description }}
</div>
@endforeach
<!--<nav>
<ul class="pager">
<li><a href="#">Previous</a></li>
<li><a href="#">Next</a></li>
</ul>
</nav>-->
</div> <!-- /.blog-main -->
@include('layouts.sidebar')
</div><!-- /.row -->
</div><!-- /.container -->

@endsection