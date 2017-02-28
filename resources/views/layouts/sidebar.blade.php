<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
<!--<div class="sidebar-module sidebar-module-inset">
  <h4>About</h4>
  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>-->
<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">
  {{-- @foreach ($archives as $month)--}}
  {{--remember: $archives is an array, not a single object--}}
    {{-- <li><a href="/?month={{ $month['month'] }}&year={{ $month['year'] }}">{{ $month['month'].' '.$month['year'] }}</a></li>--}}
  {{-- @endforeach--}}
  <li><a href="#">Testuary 2014</a></li>
  </ol>
</div>
<div class="sidebar-module">
  <h4>Elsewhere</h4>
  <ol class="list-unstyled">
    <li><a href="https://github.com/arkul/assignment-2">GitHub</a></li>
  </ol>
</div>
</div>
