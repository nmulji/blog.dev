@extends('layouts.master')


@section('content')

<div class="container-fluid" id="form_container">

	<form class="form-horizontal" action="{{{ action('HomeController@loginForm') }}}" method="POST">
	  <div class="form-group">
	    <label class="sr-only" for="exampleInputEmail3">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label class="sr-only" for="exampleInputPassword3">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
	  </div>
	  <div class="checkbox">
	    <label>
	      <input type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-default">Sign in</button>
	</form>

</div>


@stop