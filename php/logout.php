<?php
session_start();
if(isset($_SESSION['user'])){
	session_destroy();
	header("location:../index.html");
	
}else{
	header("location:../index.html");
}
	
	//if(isset($_GET['logout']))
	//{
	//	session_destroy();
	//	echo("session destroy");
		//header("location:index.html");
	//}
?>