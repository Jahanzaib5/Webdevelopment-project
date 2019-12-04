<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "university_db";

$connection = mysqli_connect($server_name, $db_username, $db_password);
$conn=mysqli_connect('localhost','root','','university_db');
$dbconfig = mysqli_select_db($connection, $db_name);
if($dbconfig)
{
	//echo ("database connected");
}
else{
	echo("database connection failure:");
}
?>