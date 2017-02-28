@extends('layouts.master')

@section('blog-title')
User Registration
@endsection

@section('blog-posts')

<form method="POST" action="/register">

  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="form-control" required />
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" required />
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" class="form-control" required />
  </div>

  {{-- Important: name="password_confirmation" so that we can use laravel's authentication method --}}
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
  
  @include('layouts.errors')

</form>

@endsection