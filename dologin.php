<?php
   $email = $_POST["email"];
   $password = $_POST["password"];

   $con= mysqli_connect("localhost", "root","","notes");
   $sql= "select * from user where email= '$email' and password= '$password'";
   $result= mysqli_query($con, $sql);
   if(mysqli_num_rows($result)==1)
   {
   	session_start();
   	$row = mysqli_fetch_assoc($result);
   	$_SESSION["user_id"]=$row["user_id"];
   	$_SESSION["name"]= $row["username"];
   	header("location: home.php");
   }

   else{

   		header("location:login.php?error=1");
   }
?>