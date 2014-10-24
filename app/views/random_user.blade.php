<!DOCTYPE html>
<html>
<head>

	<title>('Random User')</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>

	<h2>You requested {{{ $query }}} Users</h2>	
	
	
@for ($i=0; $i < $query; $i++) 
  <p><br>Name: {{{ $faker->name }}}
  @if ( ($birthday) )
		<br>Birthday: {{{ $faker->monthName }}}, 
	    {{{ $faker->dayOfMonth }}}, 
		{{{ $faker->year }}} 
  @endif
  
  @if ( ($profile) )		
     <br>Profile: {{{ $faker->text }}}<p>
  @endif
@endfor	
				
</body>
</html>