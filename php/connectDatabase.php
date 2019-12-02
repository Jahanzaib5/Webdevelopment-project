
<html>
  <head> 
   <title> Record Insertion </title> 
  </head> 
  <body>

<?php
$con = mysqli_connect("localhost","root","");
$db = "Feedback_DB";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comment = $_POST['comments']; 
if (!$con)
  {
  die('Could not connect to localhost');
  }
print("The server connection is successful. <br />");

//if the values are empty
	  
if(($_POST['name'])== '' || ($_POST['email'])=='' || empty($_Post['subject'])=='')
	{
		echo "<script>alert('Invalid Login Details')</script>";
		echo "<script>location.href='./feedback.php'</script>";
	}
else{
	// If database is not already existing, then create one
	if (!mysqli_select_db($con, $db)){
	   // Create database
	   if (mysqli_query($con, "CREATE DATABASE Feedback_DB")){
		  //print("Database created successfully. <br />");
	   }
	   else {
		 //print("Error creating database");
	   }
	   // Create table
	   mysqli_select_db( $con, $db);
	   $sql = "CREATE TABLE Feedbacks(Name varchar(255), Email varchar(255), Subject varchar(255), Comment varchar(255))";
	   // Execute query
	   mysqli_query($con, $sql);
	}
	else{
	   mysqli_select_db($con, $db);
	   $sql="INSERT INTO Feedbacks(Name, Email, Subject, Comment) VALUES('$name', '$email', '$subject', '$comment')";
	   //mysqli_query($con, $sqli); 

	   if (!mysqli_query($con, $sql)){
		 die('Error executing the query');
	   }
	  echo "<script>location.href='./result.html'</script>";
	}
}
mysqli_close($con);
?> 
   
 </body> 
</html>
