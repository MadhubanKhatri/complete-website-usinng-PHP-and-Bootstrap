<?php
session_start();
include("connection.php");
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  	<center>
  	<div class="container" >
    <form action="" method="post">
	  <div class="form-group">
	  	<h2>Login</h2>
	    <input type="text" class="form-control" id="name" name="uname" aria-describedby="emailHelp" placeholder="username" style="width: 30%;">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="password" name="pass" placeholder="password" style="width: 30%;">
	  </div>
	  <input type="submit" name="submit" value="Login" class="btn btn-primary">
	</form>
</div>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>

<?php 
if (isset($_POST['submit']))
{
	$user = $_POST['uname'];
	$pwd = $_POST['pass'];
	$query = "SELECT * FROM SIGNUP WHERE username='$user' && password='$pwd'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		echo "OK";
		header('location:webPage.php');
	}
	else
	{
		echo "Not OK";
		header('location:login.php');
	}
}
 ?>