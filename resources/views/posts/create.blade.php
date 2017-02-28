@extends('layouts.master')

@section('blog-title')
Publish a post
@endsection

@section('blog-posts')
<form method="POST" action="/posts">
@include('layouts.errors')
<div class="form-group">
<label for="title">Title:</label>
<input type="text" class="form-control" id="title" name="title" required> <!--HTML5 validation, won't work on all browsers -->
</div>
<div class="form-group">
<!-- Cross-site Request forgery nonce; Laravel won't let us submit forms until
this is provided -->
{{ csrf_field() }}
<label for="exampleInputPassword1">Body</label>
<textarea id="body" name="body" class="form-control" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection