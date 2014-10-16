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
	$alldata['paras'] = array();
	$alldata['users'] = array();
	
	// Deal with proxied domain
	$uri = new UriManager();
	$alldata['uri'] = $uri->getUri();
	
	return View::make('helperapp', $alldata);
});


Route::post('/', function()
{
	$data = Input::all();
	
	$alldata = array();
	
	$paragraphs = new Paragraphs($data['paras']);
	$alldata['paras'] = $paragraphs->getParagraphs();

	$users = new Users($data['users']);
	$alldata['users'] = $users->getUsers();
	
	// Deal with proxied domain
	$uri = new UriManager();
	$alldata['uri'] = $uri->getUri();
	
	return View::make('helperapp', $alldata);
});
