<?php
$err=false;
$show=false;
$show2=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  require '../database/dbconn.php';
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $pass2=$_POST["pass2"];
  $exist=false;
  $existsql="SELECT * FROM `usersdata` WHERE username='$email'";
  $result=mysqli_query($conn,$existsql);
  $numrow=mysqli_num_rows($result);
  if($numrow>0)
  {
    $show=true;
    $msg="Username Aleredy Exists choose another username";
  }
  else
  {
    $exist=false;
    if(($pass == $pass2))
    {
      $hash=password_hash($pass, PASSWORD_DEFAULT);
      $sql="INSERT INTO `usersdata` (`username`, `password`,`dt`) VALUES ('$email', '$hash' ,current_timestamp());";
      $res=mysqli_query($conn,$sql);
      if($res)
      {
        $err=true;
      }
    }
    else{
      $show2=true;
      $msg2="password do not match";
    }
  }
}

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    
  <title>TextDev</title>
</head>

<body>
  <?php
  include 'nav.php';
  if($err)
{
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Succesfully!</strong> You are Succesfully Sign Up.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($show){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($show2){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$msg2.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

  echo '<div class="container my-4 ms-150">
    <form action="signup.php" class="needs-validation" method="POST">
      <h1>Sign Up</h1>
      
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter a Email" required>
      </div>
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Password</label>
      <input type="password" name="pass" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter a password" required>
      </div>
      <div class="mb-3 col-8">
      <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
      <input type="password" name="pass2" class="form-control" id="pass2" aria-describedby="emailHelp" placeholder="confirm password" required>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
      <br>
      <a href="http://localhost/LoveTree/component/login.php">Go to Login Page</a>
    </div>';    
  ?>
  <div class="cotainer" style="padding-bottom:250px;"></div>
  <?php include 'footer.php';?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>