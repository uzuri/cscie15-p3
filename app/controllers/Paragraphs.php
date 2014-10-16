<?php


class Paragraphs
{
	// Default URI is root
	private $paragraphs = array();
	
	/**
	  * Set the URI on initialization
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
	
	/**
	  *  getPrettyParagraphs
	  *  Basic getter; returns paragraphs collapsed to <p></p>-separated string
	  */
	public function getPrettyParagraphs() 
	{
		return implode('<p>', $this->paragraphs);
	}   
	
}
