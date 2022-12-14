<?php
require 'common.php';
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
$user_id=$_SESSION['id'];
$select_query="select name in items where id in (select item_id from users_items where user_id='$user_id')";
$result_query=  mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched=  mysqli_num_rows($result_query);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>My Cart</title>
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
        <!--
        <nav class="navbar navbar-inverse navbar-fixed-top">
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
                        <li><a href="cart.php" class="active"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
                        <li><a href="settings.php" class="active"><span class="glyphicon glyphicon-cog "></span>Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>              
        </nav>   -->
        <?php
        include 'header.php';
        ?>
        <?php if($total_rows_fetched==0) { ?>
             <h1>Add Items To Cart </h1>
        <?php}
        else{
            $sum=0;
            $ids="";
            ?>
        <div class="container">
            
            <table class="table table-hover table-bordered table-responsive tab1">
                <tbody
                    <?php while($row = mysqli_fetch_array($select_query)) { ?>
                    <tr><th>Item Number</th> <th>Item Name </th> <th> Price </th><th>Remove</th></tr>
                    <tr><td><?php echo $row['id']; ?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['price']; ?></td><td><a href="cart-remove.php?id={$row['id']}" class='remove_item_link'> Remove</a></td></tr>
                    <?php $sum=$sum+$row['price'] ?>
                    <?php $ids=$ids+","+$row['id'] ?>
                    <?php } ?>
                    <tr><td>Check Here  </td><td>Total</td><td><?php echo $sum ?></td><td><a href="success.html?id=$ids" ><input type="submit" name="submit" value="Confirm Order" class="btn btn-primary btn-block"></a></td></tr>
                </tbody>
            </table>
        </div>
            
        <!--
        <div class="panel-footer">
            <footer>
                Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000
            </footer>
        </div>  -->
            
         <?php}
        <?php
        include 'footer.php';
        ?>
    </body>
</html>


