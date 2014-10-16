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
