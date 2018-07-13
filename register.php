<?php
  $name= $_POST["name"];
  $email= $_POST["email"];
  $password= $_POST["password"];
  $cpassword= $_POST["cpassword"];

  $con = mysqli_connect("localhost", "root","", "notes");

  if ($password==$cpassword) {
  	$sql= "insert into user set username='$name', email='$email', password='$password'";
  	if(mysqli_query($con , $sql)) {

		header("location: login.php?registrationsuccess=1");
	}
	else {
		echo mysqli_error($con);
	}
  }
  else
  {
  	 header("location: index.php?error=1");
  }

 
?>