<?php
  session_start();
  if(!isset($_SESSION["user_id"])){
  	header("location: index.php");
  	exit;
  }
$con= mysqli_connect("localhost", "root","", "notes");
?>
<!DOCTYPE html>
<html>
<head>
	<title>notes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">notes</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
     
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Sign Up</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>  Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1 class="head">Hello <?php  echo $_SESSION["name"];?></h1>
<hr>
<br><br>
<div class="container">
	<form action="donote.php" method="post">
  <div class="form-group">
    <textarea class="form-control" rows="5" name="note" placeholder="write your note here"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
</form>
<br>
<br>
<h3><b>Your saved Notes:</b></h3>

<?php

  $sql= 'select * from user_notes where user_id='.$_SESSION["user_id"];
  $result= mysqli_query($con, $sql);
  while($row=mysqli_fetch_assoc($result)){
     echo '
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      
        <p>'.$row["note"].'</p>
        <p><a  href="delete.php?note_id= '. $row["note_id"]. ' "  class="btn btn-danger" role="button">delete</a> <a href="edit.php?note_id='.$row["note_id"].'" class="btn btn-default" role="button">Edit</a></p>
      </div>
    </div>
</div>';
  }
?>
  </div>
</div>



</div>
</body>
</html>