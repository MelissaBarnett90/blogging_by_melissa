<?php
include_once 'includes/session.php'
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css"/>




    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.css">


       <!-- Bootstrap core JavaScript -->
       <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="scripts/custom.js"></script>
    <script src="scripts/owl.js"></script>
    <script src="scripts/slick.js"></script>
    <script src="scripts/isotope.js"></script>
    <script src="scripts/accordions.js"></script>
  </head>







    <title>Blogging By Melissa - <?php echo $title ?> </title>

    <head>


        <!-- Header -->
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><h2>Blogging By Melissa<em>:)</em></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                    
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>

                           
                            <?php
                            if (!isset($_SESSION['userid'])){
                            ?>

                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="login.php">Log in</a>
                                </li>

                                <?php } else { ?>
                                    <a class="nav-item nav-link"
                                       href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span
                                                class="sr-only"></span></a>
                                    <a class="nav-link active" aria-current="page" href="logout.php">Log out</a>

                                <?php } ?>


                                <?php
                             if (isset($_SESSION['username']) && $_SESSION['username'] === "admin"){
                            ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="viewrecords.php">View Records</a>
                                </li>

                           
                                <?php } else { ?>               <?php } ?>                      
                                    
                              

                                <li class="nav-item">
                                    <a class="nav-link" href="team.php">Authors</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>

                               

                            </ul>
                    </div>
                </div>
            </nav>
        </header>
        </br>
        </br>
