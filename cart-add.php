<?php

require 'common.php';
$itemid=$_GET['items_id'];
$userid=$_SESSION['id'];

//INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')

$insert_query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$result_query=  mysqli_query($con, $insert_query) or die(mysqli_error($con));
//$total_rows_fetched=  mysqli_num_rows($result_query);
header('location:products.php');

?>