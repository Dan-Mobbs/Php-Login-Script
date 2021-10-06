<?php 

    // If the user tries to access files/URL directly without signing in, this will direct them back to the login page
    if(!defined('__CONFIG__')) {
        echo "No config files detected!.. Danger!";
        exit();
	}

    // Config file below