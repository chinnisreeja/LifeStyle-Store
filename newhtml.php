<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Project_bootstrap_new</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h3>this is a image</h3>
                     <img src="img2/camera.jpg"class="img-responsive img-rounded img-thumbnail" alt="responsive image"/>
                    
                     <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block">
                </div>
            </div>
        </div>
        <?php
        $var=5;
        echo 'Iam a $var';
        echo "Tam a $var <br>";
        echo "Iam a '$var' and a $var";
        $con=  mysqli_connect("localhost","root","","store","8080") or die(mysqli_error($con));
        ?>

<?php //if (!isset($_SESSION['email'])){?> 
     <!--   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php
     //}
    //else { 
//We have created a function to check whether this particular product is added to cart or not. 
     //    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
       //   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; }
     //    else { ?>
         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
         <?php
      //   }
   //   }
      ?>
-->
    </body>
</html>
