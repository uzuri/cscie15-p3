<?php


class Paragraphs
{
	// Default URI is root
	private $paragraphs = array();
	
	/**
	  * Gets paras on init
	  */
	function __construct($numparas) 
	{	
		
		if (!is_numeric($numparas) || $numparas > 5 || $numparas < 0)
		{
			$numparas = 0;
		}
		
		$generator = new Badcow\LoremIpsum\Generator();
		$this->paragraphs = $generator->getParagraphs($numparas);
	}
	
	/**
	  *  getParagraphs
	  *  Basic getter; returns array of paragraphs
	  */
	public function getParagraphs() 
	{
		return $this->paragraphs;
	}   
}
