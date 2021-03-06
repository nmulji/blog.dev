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


   <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ action('PostsController@show', $post->id) }}">
                        <h2 class="post-title">
                            {{{ $post->title }}}
                        </h2>
<!--                         <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3> -->
                    </a>
                    <p class="post-meta">Posted by <a href="#">Niraj Mulji</a> on {{{ $post->created_at }}}</p>
                </div>
                <hr>
            @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

{{ $posts->links() }}

@stop