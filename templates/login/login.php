<?php

    // Allow the config 
    define( '__CONFIG__', true );
    
    // Then require the config file
    require_once "../../includes/config.inc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <!-- BOOSTRAP CDN -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- FONTAWSOME CDN CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="custom.css">

</head>

<body>

    <div class="container">

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h2 class="card-title mt-3 text-center">Login to Account</h2>
                <p class="text-center">Get started with your free account</p>
                <form>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="User Name or email" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="password" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> login </button>
                    </div> <!-- form-group// -->
                </form>
                <p>
                    <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via
                        Twitter</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                        facebook</a>
                </p>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->