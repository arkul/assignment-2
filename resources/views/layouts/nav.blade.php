<!--
**************************************
NAV BAR
**************************************
-->
<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
<<<<<<< HEAD
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name') }}
    </a>
@yield('nav-items')
      <ul class="nav navbar-nav navbar-right">
      @if(Auth::guest())
	  <li><a href="{{ route('login') }}">Login</a></li>
	  <li><a href="{{ route('register') }}">Register</a></li>
      @else
	  <li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
	    <ul class="dropdown-menu">
	      <li><a href="#">Profile</a></li>
	      <li><a href="/posts/create">Create new post</a></li>
	      <li role="separator" class="divider"></li>
	      <li>
		  <a href="{{ route('logout') }}"
		      onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
		      Logout
		  </a>
		  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		      {{ csrf_field() }}
		  </form>
	      </li>
	    </ul>
	  </li>
      @endif
      </ul>
=======
<!--       <a class="navbar-brand" href="#">Project name</a> -->
    </div>
    <div id="navbar" class="collapse navbar-collapse">
@yield('nav-items')
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
    </div>
  </div>
</nav>
<!--
**************************************
END NAV BAR
**************************************
-->
