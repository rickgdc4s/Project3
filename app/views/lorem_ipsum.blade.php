<!DOCTYPE html>
<html>
<head>

	<title>(Loren Ipsum)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page after generating the Lorem Ipsum -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>

	<h1>Loren Ipsum Generator Results</h1>
	
<!-- Display the number of Lorem Ipsum paragraphs requested -->	
	<h2>You requested {{{ $query }}} paragraphs</h2>
	
	<br>
	
<!-- Loop, displaying an entire, singel Lorem Ipsum paragraph on each iteration  -->		
	@foreach($paragraphs as $sentences => $paragraph)
		<section class='paragraph'>
			<p>{{{ $paragraph }}}</p>
			<br>
		</section>
	@endforeach	
		
</body>
</html>