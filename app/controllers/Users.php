<?php


class Users
{
	// Default URI is root
	private $users = array();
	
	/**
	  * Gets users on init
	  * If I really wanted to do this right, each User should probably be 
	  * an object, but let's just do this for now
	  */
	function __construct($numusers) 
	{	
		$faker = Faker\Factory::create();
		
		for ($i=0; $i < $numusers; $i++) 
		{
			$tempuser = array();
			$tempuser['name'] = $faker->name;
			$tempuser['email'] = $faker->safeEmail;
			$tempuser['username'] = $faker->userName;
			$tempuser['phone'] = $faker->phoneNumber;
			$tempuser['image'] = $faker->imageUrl(100, 100, 'cats');
			$this->users[] = $tempuser;
		}
	}
	
	/**
	  *  getUsers
	  *  Basic getter; returns array of users
	  */
	public function getUsers() 
	{
		return $this->users;
	}   
}
