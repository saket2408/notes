<?php
$id= $_GET["note_id"];
$con= mysqli_connect("localhost","root", "","notes");
$sql= "delete from user_notes where note_id=$id ";
mysqli_query($con,$sql);
header("location:home.php?deletesuccess=1");
?>