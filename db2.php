<?php
$db_host="localhost";
$db_username="root";
$db_password="12345678";
$db_name="insert booking";

$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();

//check connection
if(mysqli_connect_error())
{
//echo "Failed to connect to mysql:",mysqli_connect_error();
}
else
{
//echo "connection sucessful";
}
?>
