<?php
session_start();
if(!isset($_SESSION['email'])){
header('location: index.php');
exit;
}
session_destroy();
header('location: index.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><p>You have Logged out!.<a href="login.php">Click Here to Login</a> </p></div>
    </body>
</html>
