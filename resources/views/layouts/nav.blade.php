<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="#">Home</a>
      <a class="blog-nav-item" href="#">New features</a>
      <a class="blog-nav-item" href="#">Press</a>
      <a class="blog-nav-item" href="#">New hires</a>
      <a class="blog-nav-item" href="#">About</a>
      @if (Auth::user())
	<a class="blog-nav-item m1-auto" href="#">{{ Auth::user()->name }}</a>
      @endif
    </nav>
  </div>
</div>