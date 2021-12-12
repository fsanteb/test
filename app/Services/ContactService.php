<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		// queries to the db
		$name= array("Fidel", "Maria", "Pedro");
		return $name;
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
	}
}