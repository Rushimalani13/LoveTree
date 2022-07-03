<?php
// session_start();
// if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
// {
//   header("location: component/login.php");
//   exit;
// }
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
    require 'nav.php';

    echo '<div class="container my-4 ms-150">
    <form action="contact.php" class="needs-validation" method="POST">
      <h1>Contact Us</h1>
      <div class="mb-3 col-8">
        <label for="exampleInputEName" class="form-label">Name</label>
        <input type="name" name="Name" class="form-control" id="eName" aria-describedby="emailHelp" placeholder="Enter a Name" required >
      </div>
      
      <div class="mb-3 col-8">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter a Email" required>
      </div>
      
      <div class="mb-3 col-8">
        <label for="desc" class="form-label">Concern</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="6" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    </div>';
    ?>
    <?php include 'footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>