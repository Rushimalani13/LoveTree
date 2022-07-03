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
        include '../nav.php';
    ?>    

    <center><h1 class="my-4">BUY SECTION</h1></center>

    <div class="container-fluid mx-0 px-0 row " id="main">
        
        <?php
        require '../../database/dbconn.php';
        $sql="SELECT * FROM `product_item` WHERE `pro_cat` LIKE 'flower'";
        $res=mysqli_query($conn,$sql);
        while($result=mysqli_fetch_array($res)){
            ?>    
        <div class="card mx-4 my-2" style="width: 18rem;">   
            <img href="http://localhost/LoveTree/productinfo/more.php"><img name="imgfile" class="card-img-top py-2" src="<?php echo "../../adminPanel/".$result['pro_img'] ?>" alt="Card image cap" height="150px" width="150px"></img>
            <div class="card-body">
                    <h5 name="proname" class="card-title"><?php echo $result['pro_name'] ?></h5>
                    <p name="proprice" class="card-text">&#x20B9 <?php echo $result['pro_price'] ?></b></p>
                    <form action="../../productinfo/buynow.php" method="get"> 
                        <input name="proid" value="<?php echo $result['pro_id'];?>" size="1" type="hidden"></input>
                        <input type="submit" name="save1" class="btn btn-outline-success my-2 my-sm-2" value="Buy"></input>
                    </form> 
                <form action="../../productinfo/more.php" method="get">
                    <input name="proid" value="<?php echo $result['pro_id'];?>" size="1" type="hidden"></input>
                    <input type="submit" name="save" class="btn btn-outline-success my-2 my-sm-0" value="More About"></input>

                </form>
              
                    <!-- <i class="bx bx-cart" ></i> -->
                    <!-- <a href="http://localhost/LoveTree/productinfo/cart.php" class="btn btn-outline-success my-2 my-sm-0"><i class="bx bx-heart" ></i> Cart</a> --> 
            </div>
        </div>
        <?php }?> 

    </div>
    </div>
   
    <?php include '../footer.php'; ?>
</body>

<script src="js/slideauto.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</html>