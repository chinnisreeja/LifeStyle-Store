<?php
require 'common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Products</title>
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
     <!--   <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="MyNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php" class="active"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
                        <li><a href="settings.php" class="active"><span class="glyphicon glyphicon-cog "></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>              
        </nav>  -->
        <?php
        include 'header.php';
        ?>
        <?php
        include 'check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
                    around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="text-center col-md-3 col-sm-6">
                        <img src="img2/1.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Canon EOS</h2>
                            <p>price Rs.36000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                       <img src="img2/2.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>NIKON DSLR</h2>
                            <p>price Rs.40000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                        <img src="img2/3.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Sony DSLR</h2>
                            <p>price Rs.45000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                 
                        <img src="img2/4.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Olympus DSLR</h2>
                            <p>price Rs.50000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                  
                </div>
            </div>
            <div class="row text-center">
                <div class="text-center col-md-3 col-sm-6">
                        <img src="img2/18.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Titan Model#301</h2>
                            <p>price Rs.13000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                       <img src="img2/19.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Titan Model#201</h2>
                            <p>price Rs.3000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                        <img src="img2/20.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>HMT Milan</h2>
                            <p>price Rs.8000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                 
                        <img src="img2/21.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Faber Luba #111</h2>
                            <p>price Rs.18000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                  
                </div>
            </div>
            <div class="row text-center">
                <div class="text-center col-md-3 col-sm-6">
                        <img src="img2/22.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>H&W</h2>
                            <p>price Rs.800.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                       <img src="img2/23.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Luis Phil</h2>
                            <p>price Rs.1000.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                        <img src="img2/24.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>John Zok</h2>
                            <p>price Rs.1500.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                 
                        <img src="img2/25.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Jhalsani</h2>
                            <p>price Rs.1300.00</p>
                            <?php if (!isset($_SESSION['email'])){?> 
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php }
                                  else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                          if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
                                          else { ?>
                                           <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                           <?php
                                           }
                                        }
                            ?>
                            <input type="submit" name="submit" value="Add to Cart" class="btn btn-primary btn-block">
                        </div>
                  
                </div>
            </div>
        </div>
    </body>
</html>


