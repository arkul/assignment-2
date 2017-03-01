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
    <h1 class="blog-title">New post</h1>
  </div>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <div class="blog-post">
	<form method="POST" action="/posts">
	  @include('layouts.errors')
	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title" required>
	  </div>
	  <div class="form-group">
	    <label for="title">Description:</label>
	    <input type="text" class="form-control" id="description" name="description" required>
	  </div>
	  <div class="form-group">
	    {{ csrf_field() }}
	    <label for="exampleInputPassword1">Body</label>
	    <textarea id="body" name="body" class="form-control" required></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Publish</button>
	</form>
      </div>
    </div> <!-- /.blog-main -->
  </div><!-- /.row -->
</div><!-- /.container -->
@endsection