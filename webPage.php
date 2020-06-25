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

    <title>Web Page Website</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Web Page</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Contact us<span class="sr-only">(current)</span></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="POST">
      <?php
        if (isset($_SESSION['user_name']))
        {
          echo '<input type="submit" name="outsubmit" class="btn btn-outline-success my-2 my-sm-0" value="Logout">';
        }
        else
        {
          echo '<input type="submit" name="submit" class="btn btn-outline-success my-2 my-sm-0" value="Login">';
        }
      ?>
      <input type="submit" name="signup" class="btn btn-outline-success my-2 my-sm-0 mx-4" value="Signup">
    </form>
  </div>
</nav>
  
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">
    <?php
      if (isset($_SESSION['user_name']))
      {
       echo "Welcome "."<span  style='color:#28A745;'>".$_SESSION['user_name']."</span>";  
      }
      else
      {
        echo "Home Page"; 
      }
    ?>
    </h1>
    <p class="lead">This website is demo purpose so you can learn from this website.And all components are issued by Bootstrap v4.5</p>
  </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
if ($_POST['outsubmit']) {
  header("location:logout.php");
}

if ($_POST['submit']) {
  header("location:login.php");
}

if ($_POST['signup']) {
  header("location:signup.php");
}
?>