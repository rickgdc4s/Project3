<!DOCTYPE html>
<html>
<head>

	<title>('Random User')</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<a href='/'><img class='logo' src='/images/laravel-foobooks-logo@2x.png' alt='Foobooks logo'></a>
	
	<h1>Add Users</h1>
	
	<li><a href='/'>Home</a></li>	
	
@for ($i=0; $i < $query; $i++) 
  <h2>{{{ $faker->name }}}</h2>
  <h2>Birthday: {{{ $faker->monthName }}}, 
	    {{{ $faker->dayOfMonth }}}, 
		{{{ $faker->year }}}</h2>
  <h2>Profile: {{{ $faker->text }}}</h2>
@endfor	
				
</body>
</html>