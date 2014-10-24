<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Project 3')</title>
	<meta charset='utf-8'>

	@yield('head')

	
</head>
<body>

<!-- CSCIE-15 Dynamic Web Applications. Fall, 2014 Project P3 - Developer's Best Friend -->

	<h1>Developer's Best Friend<br></h1>
	
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br>
	the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley <br>
	of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br>
	but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised <br>
	in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently <br>
	with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	
		     <p>Generate some Lorem Ipsum dummy text, using the badcow-loremipsum package: </p>	
			 
<!-- Provide a link to the Lorem Ipsum Generator page, to be routed through the lorem_ipsum route -->			  			 
			<li><a href='/lorem_ipsum'>Execute Lorem Ipsum Generator</a></li><br>		
			
		     <p>Generate some dummy random users, using the fzaninotto-faker package, <br>
			  a Lorem Ipsum-like package for generating dummy text. Here, we are using <br>
			  the fzaninotto-faker package to generate dummy names and birthdays,<br>
              and Lorem Ipsum text for user profiles:</p>						
			 
<!-- Provide a link to the Generate Random Users page, to be routed through the random user route -->			  
			<li><a href='/random_user'>Generate Random Users</a></li>			 
	 	
</body>
</html>