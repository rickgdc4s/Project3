<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Project 3')</title>
	<meta charset='utf-8'>

	@yield('head')

	
</head>
<body>

	<h1>Developer's Best Friend<br></h1>
	
	<nav>
		<ul>
			<li><a href='/lorem_ipsum'>Execute Lorem Ipsum Generator</a></li>
			<li><a href='/random_user'>Generate Random Users</a></li>
		</ul>
	</nav>		
	
	@yield('content')

	@yield('body')
	
</body>
</html>