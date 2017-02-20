@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>{{ config('blog.title') }}</h1>
    <p>No, seriously.</p>
    <h5 class="text-center">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>

      @foreach ($posts as $post)
        <div class="col-xs-12">
            <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <em class="text-right">({{ $post->published_at->format('M jS Y g:ia') }})</em>
            <p>{!! str_limit(Markdown::convertToHtml($post->content), 500) !!}</p>
            <hr>
        </div>
        
      @endforeach

    <div class="col-xs-12 text-center">{!! $posts->render() !!}</div>
  </div>

@endsection