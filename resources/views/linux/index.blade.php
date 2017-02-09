@extends('layouts.master')

@section('content')
	<h1>Linux Study Notes</h1>
	<div>
		<p><a href="{{ route('linux-midterm') }}">Midterm (Ch 1-14)</a></p>
        <p><a href="{{ route('linux-final') }}">Final (Ch 15-27)</a></p>
	</div>
@endsection