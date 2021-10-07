<?php 

    // If the user tries to access files/URL directly without signing in, this will direct them back to the login page
    if(!defined('__CONFIG__')) {
        exit("No config files detected!.. Danger!");
	}

    // Config file below

    // Include DB file
    include_once "classes/db.class.php";

    $conn = DB::getConnection();