@extends('layouts.master')

@section('content')

@include('welcomemd')

<a href="{{ route('blog') }}">
    <button class="btn btn-lg btn-primary">My Blog</button>
</a>
<a href="https://www.linkedin.com/in/chrisknoll3/" target="_blank">
    <button class="btn btn-lg btn-primary">LinkedIn</button>
</a>
<a href="https://github.com/chris-knoll" target="_blank">
    <button class="btn btn-lg btn-primary">GitHub</button>
</a>

@endsection