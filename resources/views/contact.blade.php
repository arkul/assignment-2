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
  <li class="active"><a href="#">Contact</a></li>
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
    <h1 class="blog-title">Contact</h1>
  </div>
  <div class="row">
    <div class="col-sm-8 blog-main">
      <div class="blog-post">
	<a href="mailto:syednid@sheridan.desire2learn.com">Nida Syed</a><br />
	<a href="mailto:josh.monague@sheridanc.on.ca">Josh Monague</a>
      </div>
    </div> <!-- /.blog-main -->
  </div><!-- /.row -->
</div><!-- /.container -->
@endsection