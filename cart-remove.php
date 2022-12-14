<?php

require 'common.php';

$id1=$_GET['id'];
$user_id=$_SESSION['id'];
$del_query="delete from users_items where id='$id1' and user_id='$user_id'";
$result_query=  mysqli_query($con, $del_query) or die(mysqli_error($con));
header('location:cart.php');
//$total_rows_fetched=  mysqli_num_rows($result_query);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

