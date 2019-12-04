<?php
$username = $_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
	echo "connection failed";
}else{
	$stmt = $conn->prepare("insert into users(username, email, password) values(?,?,?)");
	$stmt->bind_param("sss",$username, $email, $password);
	$stmt->execute();
	echo "<script>location.href='update.html'</script>";
	$stmt->close();
	$conn->close();
}
?>