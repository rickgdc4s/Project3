<!DOCTYPE html>
<html>
<head>

	<title>Lorem Ipsum Generator</title>
	<meta charset='utf-8'>
	
</head>
<body>

		<ul> In Lorem Ipsum Generator</ul>
		
		{{ Form::open(array('url' => '/list', 'method' => 'POST')) }}

		{{ Form::label('query','Search') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}
	
</body>
</html>

