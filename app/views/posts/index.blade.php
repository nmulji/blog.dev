@extends('layouts.master')

    <!--Form Style Sheet-->

    <link rel="stylesheet" href="/css/form.css">

@section('content')

	<h1>All Posts</h1>

	@foreach($posts as $post)
		<div class="container">
			<h3>{{{ $post->title }}}</h3>
			<p>{{{ $post->description }}}</p>
		</div>
	@endforeach

@stop