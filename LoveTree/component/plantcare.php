<!-- <?php
// session_start();
// if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
// {
// //   header("location: login.php");
// //   exit;
// }
?> -->
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
    
    <style>
    .mySlides {display:none;}
    .slideshow{height:500px;}
    .round{border-radius: 18px;}
    </style>

    <title>LoveTree</title>
</head>

<body>
    <?php
        include 'nav.php';
    ?>    

    <center><h1 class="my-4">PLANT-CAREING</h1></center>
    <div class="container">
        <?php
        require '../database/dbconn.php';
        $sql="SELECT * FROM `artical`";
        $res=mysqli_query($conn,$sql);
        while($result=mysqli_fetch_array($res)){
            ?>    
            <form action="treeblog.php" method="GET">
        <input name="artid" value="<?php echo $result['id'];?>" size="1" type="hidden"></input>

        <div class="card text-center bg-dark  text-white my-4">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $result['heading'] ?></h5>
                <p class="card-text"><?php echo substr($result['description'],1,250) ?>...</p>
                <input class="btn btn-primary" type="submit" value="Read More"/>
           
            </div>
            
        </form>
        </div>
            <?php }?>
        </div>
            
    </div>
   
    <?php include 'footer.php'; ?>
</body>

<script src="js/slideauto.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</html>