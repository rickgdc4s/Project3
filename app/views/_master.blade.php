<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Project 3')</title>
	<meta charset='utf-8'>

	@yield('head')

	
</head>
<body>

	<a href='/'><img class='logo' src='/images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'></a>

	<nav>
		<ul>
			<li><a href='/list'>Execute Lorem Ipsum Generator</a></li>
			<li><a href='/add'>Generate Random Users</a></li>
		</ul>
	</nav>
	
	@yield('content')

	@yield('body')
	
</body>
</html>