<?php
/**
 * Created by PhpStorm.
 * User: daltonpolhill
 * Date: 25/03/19
 * Time: 9:35 AM
 */

class clsAuth
{
	private $loggedInUser;
	private $DAL;

	public function __construct($loggedInUser, $DAL)
	{
		$this->loggedInUser = $loggedInUser;
		$this->DAL = $DAL;
	}
}