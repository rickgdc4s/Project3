<!DOCTYPE html>
<html>
<head>

	<title>('Random User')</title>
	<meta charset='utf-8'>
	
</head>
<body>

<!-- Provide a link to return to the home page after generating the random users -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>

<!-- Display the number of random users requested, along with whether to
       display dummy birthday and profile text-->		
	<h2>You requested {{{ $query }}} Users
	
	@if ( ($birthday) )
	    with their birthdays
	@endif		
	@if ( $profile )
	    and with their profiles	
	@endif
	</h2>
	
<!-- For each random user, generate a fake name, and if requested, a fake birthday
      and profile -->		
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