@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>{{ config('blog.title') }}</h1>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>

      @foreach ($posts as $post)
      <div class="panel panel-primary">
        <div class="col-xs-12 panel-heading">
          <div class="col-xs-9">
            <h3 class="panel-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
          </div>
          <div class="col-xs-3 text-right">
            <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
          </div>
        </div>
        <div class="panel-body">
            <p>
              {!! str_limit($post->content, 500) !!}
            </p>
        </div>
      </div>
      @endforeach

    <hr>
    {!! $posts->render() !!}
  </div>

@endsection