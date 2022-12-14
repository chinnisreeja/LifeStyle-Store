<?php
require 'common.php';
//$email = $_POST['email'];
/*$regex_email = ""[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z][2,3]$":
if(preg_match($regex_email, Semail)){
echo "Incorrect email;
}*/
$password = $_POST['Password'];
if (strlen($password) <6){
 echo "Password should have at least 6 characters";
}
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $email);
$password1 = mysqli_real_escape_string($con, $password);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);
//insert query and store the data in the database
$select_query="select id from users where email='$email'";
$result_query=  mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched=  mysqli_num_rows($result_query);
if($total_rows_fetched>0){
echo 'Dup email not allowed';
}
else{
    $query1="insert into users(name.email,password,
             contact,city,address) values ('$name','$email','$password1','$contact','$city','$address')";
    $new_user_submit=  mysqli_query($con, $query1) or die(mysqli_error($con));
    echo 'User created Successfully';
    $_SESSION['email']=$email;
    $_SESSION['id']=mysqli_insert_id($con);
    header('location: products.php');
}
?>