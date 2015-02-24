@extends('layout')

@section('content')
  <div class="blog-header">
    <h1 class="blog-title">My Amazing Blog</h1>
    <p class="lead blog-description">This is where I put stuff.</p>
  </div>

  <div class="row">

    <div class="col-sm-8 blog-main">

      @foreach($posts as $post)
        <div class="blog-post">
          <h2 class="blog-post-title">{{$post->title}}</h2>
          <p class="blog-post-meta">{{$post->created_at->format('m/d/Y')}}</p>

          {!! nl2br($post->content) !!}

        </div><!-- /.blog-post -->
      @endforeach

      <nav>
        {!! $posts->render() !!}
      </nav>

    </div><!-- /.blog-main -->

    @include('partials.sidebar')

  </div><!-- /.row -->
@stop