@extends('layouts.master')

    <!--Form Style Sheet-->

    <link rel="stylesheet" href="/css/form.css">

@section('content')

<div class="container-fluid" id="form_container">

	@if ($errors->has('title'))

		<div class="alert alert-danger">

			{{ $errors->first('title', '<span class="help-block">:message</span>') }}

		</div>

	@endif

	<form class="form-horizontal" action="{{{ action('PostsController@store') }}}" method="POST">
		<div class="col-sm-10">
			<input id="input_title" type="text" class="form-control" name="title" placeholder="Title Your Post" value="{{{ Input::old('title') }}}">
		</div>

	@if ($errors->has('description'))

		<div class="alert alert-danger">

			{{ $errors->first('description', '<span class="help-block">:message</span>') }}

		</div>

	@endif

		<div class="col-sm-10">
			<textarea id="input_description" class="form-control" name="description" placeholder="Type your post here" required>{{{ Input::old('description') }}}</textarea>
		</div>

		<div class="col-sm-10">
		    <button id="submit_post" type="submit" class="btn btn-default">Post Ad</button>
		</div>
	</form>

</div>

@stop