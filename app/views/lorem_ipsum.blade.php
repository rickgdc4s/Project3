<!DOCTYPE html>
<html>
<head>

	<title>('Loren Ipsum')</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<a href='/'><img class='logo' src='/images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'></a>
	
	<h1>Books</h1>
	
	<li><a href='/'>Home</a></li>

	<h2>You searched for {{{ $query }}}</h2>
	
	@foreach($paragraphs as $sentences => $paragraph)
		<section class='paragraph'>
			<h3>{{{ $paragraph }}}</h3>
			<br>
		</section>
	@endforeach	
		
</body>
</html>