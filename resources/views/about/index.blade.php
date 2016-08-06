@extends('app')


@section('title','Page Title')

@section('sidebar')
	@parent
	<p>This is a message from the sidebar</p>
@endsection

@section('content')

	<h1>About us</h1>
	<p>
		About us goes here
	</p>
@endsection