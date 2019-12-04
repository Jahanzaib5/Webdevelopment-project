<?php

//$username = $_POST['username'];
//$password = $_POST['password'];
//
//function do_alert($msg) 
//{
//	echo '<script type="text/javascript">alert("' . $msg . '"); </script>';
//}
//
//$username = stripcslashes($username);
//$password = stripcslashes($password);
//
//$conn = mysqli_connect("localhost", "root", "");
//mysqli_select_db($conn, "login");
//
//$result = mysqli_query($conn, "Select * from users where username = '$username' and password = '$password'")
//			or die("Failed to connect".mysqli_error());
//$row = mysqli_fetch_array($result);
//if($row['username'] == $username && $row['password'] == $password ){
//	echo "<script>location.href='portal.html'</script>";
//}else{
//	echo "<script>alert('Invalid Login Details')</script>";
//	echo "<script>location.href='index.html'</script>";
	
//}

$conn=mysqli_connect('localhost','root','','login');

if(!$conn){
	die('please check your connection!'.mysqli_error($conn));
}

session_start();

if(isset($_SESSION['user'])){
	echo("<h1>Welcome".$_SESSION['user']."</h1>");
	header("location:portal.php");
}else{

if(isset($_POST['Login'])){
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		echo "<script>alert('Invalid Login Details')</script>";
		header("location:index.html?Empty=please fill in the blanks");
	}
	else if(($_POST['username'] == 'admin') && ($_POST['password'] == 'admin'))
	{
		$_SESSION['user']=$_POST['username'];
		header("location:./php/adminportal.php");
	}

	else
	{
		$query= "select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'";
		$result=mysqli_query($conn, $query);

		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['user']=$_POST['username'];
			echo "<script>alert('Welcome')</script>";
			header("location:portal.php");
		}
		else
		{
			echo "<script>alert('Invalid Login Details')</script>";
			echo "<script>location.href='index.html'</script>";
			//header("location:index.html?Invalid=please provide valid details");
		}
	}
	}else{
		echo "not working";
	}
}
	
	

?>