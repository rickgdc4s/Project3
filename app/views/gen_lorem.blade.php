<!DOCTYPE html>
<html>
<head>

	<title>Lorem Ipsum Generator</title>
	<meta charset='utf-8'>
	
</head>
<body>

		<hl><b>Lorem Ipsum Generator</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/lorem_ipsum', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the # of Paragraphs ') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Generate'); }}

		{{ Form::close() }}	
	
</body>
</html>