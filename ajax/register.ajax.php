<?php

    // Allow the config 
    define( '__CONFIG__', true );
    
    // Then require the config file
    require_once "../includes/config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');

        $return = [];

        // User does not excist

        // User can be added and is added

        // Return the correct info

        $return['redirect'] = '../dashboard.php';
        
        $return['name'] = 'Test1';

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
        
    } else {
        header('location: ../app/templates/login/login.php');
        exit("test");
    }

   

   

    