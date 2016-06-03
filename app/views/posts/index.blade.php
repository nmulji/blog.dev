@extends('layouts.master')

    <!--Form Style Sheet-->

    <link rel="stylesheet" href="/css/form.css">

@section('content')

	<h1>All Posts</h1>

	@foreach($posts as $post)
		<div class="container">
			<h3><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></h3>
			<p>{{{ $post->description }}}</p>
			<p> Written on: {{{ $post->created_at }}}</p>
		</div>
	@endforeach

	{{ $posts->links() }}

@stop