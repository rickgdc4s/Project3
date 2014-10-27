<!DOCTYPE html>
<html>
<head>

	<title>Lorem Ipsum Generator</title>
	<meta charset='utf-8'>
	
</head>
<body>

<!-- Display error messages if any errors found during validation  -->	

	<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>

<!-- Create the form to obtain the number of paragraphs, and to generate the Lorem Ipsum 
      on the lorem_ipsum blade view page  -->

		<hl><b>Lorem Ipsum Generator</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/lorem_ipsum', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the # of Paragraphs: 1 - 99 ') }}
	
		{{ Form::text('query'); }}

		{{ Form::submit('Generate'); }}

		{{ Form::close() }}	
	
</body>
</html>