<?php
include("loginconnection.php");
$username=$_POST['username'];
$password=$_POST['password'];


//inserting data into table
$query=mysqli_query($db_connect,"INSERT INTO ulogin(username,password)VALUES('$username','$password')") or die(mysqli_error($db_connect));
mysqli_close($db_connect);