@extends('layouts.master')

    <!--Form Style Sheet-->

    <link rel="stylesheet" href="/css/form.css">

@section('content')

	<section class="container">
		<h1>{{{ $post->title }}}</h1>
		<p>{{{ $post->description }}}</p>
	</section>

@stop