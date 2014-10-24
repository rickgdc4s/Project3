<!DOCTYPE html>
<html>
<head>

	<title>User Generator</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>User Generator</b><br><br></hl> 
		
	{{ Form::open(array('url' => '/random_user', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the # of Users ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('Generate'); }}
		
		<br>
		
		{{ Form::label('birthday', 'Birthday') }}
			
		{{ Form::checkbox('birthday', 'Birthday') }}	

		<br>
		
		{{ Form::label('profile', 'Profile') }}
			
		{{ Form::checkbox('profile', 'Profile') }}			

	{{ Form::close() }}
	
	
</body>
</html>