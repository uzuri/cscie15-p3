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
	$alldata['paras'] = "";
	$alldata['users'] = array();
	
	
	// Deal with proxied domain
	// This isn't ideal, but it works
	$test = new UriMAnager();
	$alldata['uri'] = $test->getUri();
	
	return View::make('helperapp', $alldata);
});


Route::post('/', function()
{
	$data = Input::all();
	
	$alldata = array();
	
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($data['paras']);
	
	$alldata['paras'] = implode('<p>', $paragraphs);
	
	$faker = Faker\Factory::create();
	
	$allusers = array();
	for ($i=0; $i < $data['users']; $i++) 
	{
		$tempuser = array();
		$tempuser['name'] = $faker->name;
		$allusers[] = $tempuser;
	}
	
	$alldata['users'] = $allusers;
	
	// Deal with proxied domain
	$test = new UriMAnager();
	$alldata['uri'] = $test->getUri();
	return View::make('helperapp', $alldata);
});
