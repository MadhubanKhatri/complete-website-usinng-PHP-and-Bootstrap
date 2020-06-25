<?php 
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SIGNUP</title>
  </head>
  <body>
    <div class="container">
      <h1>Signup</h1>
    <form action="" method="POST">
    <div class="form-group">
      <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="NAME" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="pass" class="form-control" placeholder="PASSWORD" style="width: 30%">
    </div>
    <div class="form-group">
      <input type="text" name="phone" class="form-control" placeholder="PHONE NUMBER" style="width: 30%">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Signup</button>
  </form>
  </div>

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
  $name = $_POST['name'];
  $pwd = $_POST['pass'];
  $phone = $_POST['phone'];
  if ($name!="" && $pwd!="" && $phone!="") 
  {
    $insert_data = "INSERT INTO SIGNUP (username,password,phone) VALUES ('$name','$pwd','$phone')";
    $data = mysqli_query($conn,$insert_data);
    if ($data)
    {
    echo "Data inserted";
    header("location:login.php");
    }
  }
  else
  {
    echo "All fields are required";
  }
}
?>
