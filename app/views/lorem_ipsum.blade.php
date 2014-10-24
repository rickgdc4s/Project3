<!DOCTYPE html>
<html>
<head>

	<title>(Loren Ipsum)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>

	<h1>Loren Ipsum Generator Results</h1>
	
	<h2>You requested {{{ $query }}} paragraphs</h2>
	
	@foreach($paragraphs as $sentences => $paragraph)
		<section class='paragraph'>
			<p>{{{ $paragraph }}}</p>
			<br>
		</section>
	@endforeach	
		
</body>
</html>