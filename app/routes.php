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

Route::get('/list', function()
{
	//return View::make('hello');
	return View::make('index');
});

Route::post('/list', function()
{
    $query = Input::get('query');
	
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($query);
	
	return View::make('list')
         ->with('query', $query)
		 ->with('paragraphs', $paragraphs);
		 
	//return View::make('hello');
	//return View::make('index');
});

Route::get('/add', function()
{

     $faker = Faker\Factory::create();
	 
	 echo $faker->name;

	//return View::make('hello');
	return View::make('add')
	         ->with('faker', $faker);

});
