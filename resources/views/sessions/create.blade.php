@extends('layouts.master')

@section('blog-title')
Sign in
@endsection

@section('blog-posts')
<form method="POST" action="/login">
  {{ csrf_field() }}
  @include('layouts.errors')
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" required />
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" class="form-control" required />
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>

</form>
@endsection