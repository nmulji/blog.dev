@extends('layouts.blog')


@section('content')

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Welcome!</h1>
                        <hr class="small">
                        <span class="subheading">I'm Glad You Are Here</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Create Post -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
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
                </div>
            </div>
        </div>
    </article>

    <hr>

@stop