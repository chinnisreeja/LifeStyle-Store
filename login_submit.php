<?php
require 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$pass=md5($password);
$select_query="select id,email from users where email='$email' and password='$pass'";
$result_query=  mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched=  mysqli_num_rows($result_query);
if($total_rows_fetched==0){
    echo 'NO User with given Credentials';
}
else{
    $row=  mysqli_fetch_array($result_query);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    if(isset($_SESSION['id'])){
    header('location: products.php');
    //exit;
    }

}
?>

