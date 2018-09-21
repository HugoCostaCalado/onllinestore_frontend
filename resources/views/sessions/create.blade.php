@extends('layouts.master')

@section('content')

	<form method="post" action="/login">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="email">Email: </label>
	    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
	  </div>

	  <div class="form-group">
	    <label for="password">Password: </label>
	    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	  </div>

{{-- 	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div> --}}

	 <div class="form-group">
	  <button type="submit" class="btn btn-primary">login</button>
	 </div>

	 <div class="form-group">

	 	@include('layouts.errors')

	 </div> 

	</form>

@endsection