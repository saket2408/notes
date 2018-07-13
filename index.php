<!DOCTYPE html>
<html>
<head>
	<title>register</title>
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
        <li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
       
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row note">
		<div class="col-md-6">
			<h3>Here you can create and manage your notes</h3>
			<img src="wallpaper2you_535746.png" class="image">
		</div>	
		<div class="col-md-6">
			<?php
				if(isset($_GET["error"])){
					echo "<b>username password does not match</b>";
				}
			?>
			<h3>Register Now</h3>
			<br>
			<form action="register.php" method="post">
				  <div class="form-group">
				    <label>Enter your name</label>
				    <input type="text" class="form-control" name="name" placeholder="Name" required>
				  </div>
				  <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" name="email" placeholder="Email" required>
				  </div>
				  <div class="form-group">
				    <label>password</label>
				    <input type="password" class="form-control" name="password" placeholder="password" required>
				  </div>
				  <div class="form-group">
				    <label>confirm password</label>
				    <input type="password" class="form-control" name="cpassword">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>

		</div>	
	</div>
</div>
</body>
</html>