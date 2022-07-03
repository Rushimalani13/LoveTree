<?php
require '../database/dbconn.php';
$finalkey=$_GET['artid'];
// echo "</pre>";
// print_r($finalkey);
$sql="SELECT * FROM `artical` WHERE `id`='$finalkey'";
$res=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($res);
// print_r($result);s
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
    
   
   
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <title>LoveTree</title>
   
</head>
<style>
     #head{
         background-color: rgba(6, 251, 79, 0.2);
         padding: 4px;
         display: inline-block;
         
     }
    </style>
<body>
    <?php
    require '../component/nav.php';
    ?>

        <h2 class="mx-4 my-4" id="head"><?php echo $result['heading'] ?></h2>
    <center>
        <div class="container my-4">
            <img src="<?php echo "../adminPanel/".$result['artical_img'] ?>" alt="img" height="500px" width="500px">
        </div>
    </center>

    <div class="container my-4">
        <?php echo $result['description'] ?>
    </div>  

    <?php include 'footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>