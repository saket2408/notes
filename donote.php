<?php
session_start();
$note= $_POST["note"];
$user_id=$_SESSION["user_id"];

$con= mysqli_connect("localhost","root","","notes");
$sql= "insert into user_notes set user_id='$user_id', note='$note'";
mysqli_query($con,$sql);
header("location:home.php?inserted=1");
?>