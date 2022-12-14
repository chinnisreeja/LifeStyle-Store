<?php
require 'common.php';
$old_password=  mysqli_real_escape_string($con,$_POST['Old pass']);
$new_password=mysqli_real_escape_string($con,$_POST['New Pass']);
$retype_new_password=mysqli_real_escape_string($con,$_POST['New Pass Retype']);
$email=$_SESSION['email'];
$id=$_SESSION['id'];
if(strlen($new_password)!=strlen($retype_new_password)){
    echo 'Not Matched';
    header('location:settings.php');
}
else{
    $select_query="select password from users where email='$email' and id='$id'";
    $result_query=  mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result_query);
    if($row['password']==$old_password){
    $Update_query="update users set password='$new_password' where password='$old_password'";
    $result_query=  mysqli_query($con, $select_query) or die(mysqli_error($con));
    
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

