<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName($name): Contact
	{
		// queries to the db
		$array= array("Fidel", "Maria", "Pedro");
		$Contact = in_array($name, $array);
		return $Contact;
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
	}
}