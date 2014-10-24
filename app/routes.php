<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// When p3.rickcscie15.me is entered in a browser, it will bring the user 
	//  to here, the _mastre blade view
	return View::make('_master');
});

Route::get('/lorem_ipsum', function()
{
	// When the lorem-ipsum generator link is selected from the main page
	//  (the _master blade view), the user is routed to the gen_lorem blade view
	return View::make('gen_lorem');
});

Route::post('/lorem_ipsum', function()
{
    // Using the information entered at the gen_lorem blade view, the user
	//  is routed here and the results of the generated lorem ipsum is
	//  processed and posted to the lorem_ipsum blade view
	
	// Obtain the number of paragraphs to generate
    $query = Input::get('query');
	
	// Use the Badcow LoremIpsum Generator to generate the text
	//  Instantiate a Badcow LoremIpsum Generator object
	$generator = new Badcow\LoremIpsum\Generator();
	
	// Generate the Lorem Ipsum paragraphs using the 
	//  Badcow LoremIpsum Generator object and the number of
	//  paragraphs specified in query
	$paragraphs = $generator->getParagraphs($query);
	
	// Post to the lorem_ipsum blade view
	return View::make('lorem_ipsum')
        ->with('query', $query)
		->with('paragraphs', $paragraphs);		 
});

Route::get('/random_user', function()
{
	// When the random user generator link is selected from the main page
	//  (the _master blade view), the user is routed to the gen_user blade view
	return View::make('gen_user');
});

Route::post('/random_user', function()
{
    // Using the information entered at the gen_user blade view, the user
	//  is routed here and the random users information is gathered and posted
	//   to the random_user blade view
	
	// Get the number of users
    $query = Input::get('query');
	
	// Get the value of the Birthday check box
	$birthday = Input::get('birthday');
	
	// Get the value of the Profile check box	
	$profile = Input::get('profile');
	
	// Instantiate a Faker\Factory object
    $faker = Faker\Factory::create();
	 
	// Send the values of the query, Birthday checkbox, and Profile
	//   checkbox, and the Faker object, to the random_user blade 
	//   view to be processed and posted
	return View::make('random_user')
         ->with('query', $query)	
	     ->with('birthday', $birthday)
		 ->with('profile', $profile)
		 ->with('faker', $faker);
		 

});
