@extends('_master')

@section('title')
	Books
@stop

@section('content')
	<h1>Books</h1>

	<h2>You searched for {{{ $query }}}</h2>
	
	@foreach($paragraphs as $sentences => $paragraph)
		<section class='paragraph'>
			<h3>{{{ $paragraph }}}</h3>
			<br>
		</section>
	@endforeach	
	
@stop