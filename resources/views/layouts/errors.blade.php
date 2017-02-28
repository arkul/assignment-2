@if(count($errors) > 0)
<div class="form-group">
<<<<<<< HEAD
  <div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
=======
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<ul>
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
>>>>>>> 91ff01ad94fa62bc2e8e529f7bf85fe559e8d33f
</div>
@endif