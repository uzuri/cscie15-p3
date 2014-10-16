<?php


class UriManager
{
	// Properties
	private $uri = "/";
	
	// Methods
	
	function __construct() 
	{
		if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
		{
			$uri = "http://" . $_SERVER['HTTP_X_FORWARDED_HOST'];
		}
	}
	
	public function getUri() 
	{
		return $this->uri;
	}   
	
}
