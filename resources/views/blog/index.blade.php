@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>{{ config('blog.title') }}</h1>
    <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
    <hr>

      @foreach ($posts as $post)
        <div class="col-xs-12">
            <h3><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p><em>({{ $post->published_at->format('M jS Y g:ia') }})</em></p>
            <div class="col-xs-10 col-offset-1">
              {!! str_limit(Markdown::convertToHtml($post->content), 500) !!}
            <hr>
            </div>
        </div>
        
      @endforeach

    {!! $posts->render() !!}
  </div>

@endsection