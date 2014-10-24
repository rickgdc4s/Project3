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
	//return View::make('hello');
	return View::make('_master');
});

Route::get('/lorem_ipsum', function()
{
	//return View::make('hello');
	return View::make('gen_lorem');
});

Route::post('/lorem_ipsum', function()
{
    $query = Input::get('query');
	
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($query);
	
	return View::make('lorem_ipsum')
        ->with('query', $query)
		->with('paragraphs', $paragraphs);		 
});

Route::get('/random_user', function()
{
	return View::make('gen_user');
});


Route::post('/random_user', function()
{
    $query = Input::get('query');
	$birthday = Input::get('birthday');
	$profile = Input::get('profile');
	
    $faker = Faker\Factory::create();
	 
	return View::make('random_user')
         ->with('query', $query)	
	     ->with('birthday', $birthday)
		 ->with('profile', $profile)
		 ->with('faker', $faker);
		 

});
