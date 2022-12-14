<?php
require 'common.php';
require_once '';

if (isset($_SESSION['email'])) { header('location: products.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
                <title>LifeStyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <!--
        <nav class="navbar navbar-inverse navbar-fixed-top header1">
            <div class="container innerHeader1">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span> 
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand Logo1">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse Header-Link1" id="MyNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php" class="active"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>              
        </nav>  -->
        <div class="content1">
        <div id="banner_image">
            <div class="container inner-banner-image1">
                <div id="banner_content">
                    <h1>We Sell LifeStyle</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active button1">Shop Now</a>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="items">
                    <a href="#">
                        <img src="img2/watch.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.”.</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <img src="img2/camera.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
         
                <div class="items">
                    <a href="#">
                        <img src="img2/shirt.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our Exquisite collection of Shirts</p>
                        </div>
                    </a>
                </div>
            </div>
    <!--         <div class="container">
                <div class="items">
                    <a href="#">
                        <img src="img2/1.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.”.</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <img src="img2/2.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                </div>
         
                <div class="items">
                    <a href="#">
                        <img src="img2/3.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our Exquisite collection of Shirts</p>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <a href="#">
                        <img src="img2/4.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our Exquisite collection of Shirts</p>
                        </div>
                    </a>
                </div>
            </div>
    -->
        </div>
        
        <!--
        <div class="panel-footer">
            <footer>
                Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000
            </footer>
        </div>  -->
        <?php
        include 'footer.php';
        ?>

        <?php
        // put your code here
    //    Echo"<h1>Iam the Batman :)</h1>";
        ?>
    </body>
</html>
