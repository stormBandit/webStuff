<?php
/**
 * Created by PhpStorm.
 * User: daltonpolhill
 * Date: 20/03/19
 * Time: 9:15 AM
 */

/*
 * This file will be used to set up various global entities that are necessary across the site.
 * It should be included on the index page or other pages as needed.
 */

// Include the CredStore.
require_once(__DIR__ . "/credStore/clsCredStore.php");

session_start();

// Connect to the appropriate db, depending on local or production environment
//TODO - currently not using a db
$DAL = null;

//Global User Object Var
//loggedInUser can be used globally if constructed
if(isset($_SESSION["userCakeUser"]) && is_object($_SESSION["userCakeUser"]))
{
	$loggedInUser = $_SESSION["userCakeUser"];

	if($loggedInUser->user_id == "1" || $loggedInUser->user_id == "11" || $loggedInUser->user_id == "27" || $loggedInUser->user_id == "5004")
	{
		error_reporting(E_ALL);
		ini_set("display_errors", "on");
	}
}
else
	$loggedInUser = null;

// Create the auth object, with the current user from the $_SESSION['uid']
// TODO - currently not using auth or logging users in
require_once("clsAuth.php");
$auth = new clsAuth($loggedInUser, $DAL);