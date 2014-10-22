<!DOCTYPE html>
<html>
<head>

	<title>User Generator</title>
	<meta charset='utf-8'>
	
</head>
<body>

		<ul> In User Generator</ul>
		
		{{ Form::open(array('url' => '/random_user', 'method' => 'POST')) }}

		{{ Form::label('query','Search') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}
	
</body>
</html>