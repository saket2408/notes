<?php
 $note= $_POST["note"];
 $id=$_GET["note_id"];
 $con=mysqli_connect("localhost","root","","notes");
 $sql= "update user_notes set note= '$note' where note_id= '$id'";

 mysqli_query($con , $sql);


 header("location:home.php?editdone=1");
?>