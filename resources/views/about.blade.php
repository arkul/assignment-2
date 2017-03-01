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
  <li class="active"><a href="#">About</a></li>
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
	<p>Assignment 2 - secure blog<br />
	PROG38263 Secure Software Development
	</p>
      </div>
    </div> <!-- /.blog-main -->
  </div><!-- /.row -->
</div><!-- /.container -->
@endsection