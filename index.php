<?php

    // Allow the config 
    define( '__CONFIG__', true );
    
    // Then require the config file
    require_once "includes/config.inc.php";

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

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..."
                        aria-label="Search">
                </form>

                <div class="text-end">
                    <a href="templates/login/login.php" class="btn btn-outline-light me-2">Login</a>
                    <a href="templates/login/register.php" class="btn btn-warning">Sign-up</a>
                </div>
            </div>
        </div>
    </header>

    <?php require_once "templates/footer/footer.php"; ?>

</body>

</html>