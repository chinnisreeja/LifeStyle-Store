<?php
include 'common.php';
if(!isset($_SESSION['email'])){
header('location: index.php');
exit;
}
$ids=$_GET['id'];
//For all item id’s present in url, change the status to confirmed including user id in where clause.
$select_query="update users set status='confirmed' where user_id='$user_id' and id='$ids'";
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
        <title>Confirmed</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><p>Your order is confirmed. Thank you for shopping
                with us. <a href="products.php">Click here</a> to purchase any other item.</p></div>
    </body>
</html>


