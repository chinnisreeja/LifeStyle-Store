<?php
require 'common.php';
if(isset($_SESSION['id'])){
header('location: products.php');
exit;
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
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
        <header>
  <!--      <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="MyNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php" class="active"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>              
    </nav>  -->
         <?php
        include 'includes/header.php';
        ?>
        </header>
        <div>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                        <h1>SIGN UP</h1>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true"
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z][2,3]$">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" name="Password" placeholder="password"
                                     pattern=".(6,)">
                            </div>
                            <div class="form-group">
                             <input type="number" class="form-control" name="contact" placeholder="contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="city">
                            </div>
                            <div class="form-group">
                               <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>
                        </form>
                      
                        <button class="btn btn-primary">Submit</button>
                        
                    </div>
                    

                </div>
            </div>
        </div>
    <!--    <div class="panel-footer">
        <footer>
                Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000
        </footer>  -->
            <?php
        require 'footer.php';
        ?>
        </div>
    </body>
</html>


