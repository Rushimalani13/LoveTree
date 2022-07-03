<!-- <?php
$err=false;
$show=false;
// if($_SERVER["REQUEST_METHOD"]=="POST")
// {
//   require 'db_connect.php';
//   $UName=$_POST["LName"];
//   $pass=$_POST["Lpass"];

//     // $sql="select *from usersdata where username='$UName' AND password='$pass'";
//     $sql="select *from usersdata where username='$UName'";
//     $res=mysqli_query($con,$sql);
//     $num=mysqli_num_rows($res);
//     if($num==1)
//     {
//       while($row=mysqli_fetch_assoc($res)){
//         if(password_verify($pass,$row['password'])){
//           $err=true;
//           session_start();
//           $_SESSION['log']=true;
//           $_SESSION['username']=$UName;
//           header("location: ../index.php");
//         } else
//         {
//           $show=true;
//         }
//       }
//     }
//   else
//   {
//     $show=true;
//   }
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
    
   
   
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="../css/productstyle.css" rel="stylesheet">
    
    <title>LoveTree</title>
</head>

<body>
    <?php
    require '../component/nav.php';
    ?>


    <?php
        require '../database/dbconn.php';
        // echo "<pre>";
        // print_r($_GET);
        $finalkey=$_GET['proid'];
        // echo "</pre>";
        $sql="SELECT * FROM `product_item` WHERE `pro_id`='$finalkey'";
        $res=mysqli_query($conn,$sql);
        $result=mysqli_fetch_array($res);
        // print_r($result);
    ?>  
    <div class="container">
    <div class="container">
       <img src="<?php echo "../adminPanel/".$result['pro_img']; ?>" alt="img" height="500px" width="500px">
    </div>
         
         <!-- Right Column -->
 <div class="right-column ">
     
   <!-- Product Description -->
   <div class="product-description">
       <span><?php echo $result['pro_cat']; ?></span>
       <h1><?php echo $result['pro_name']; ?></h1>
     <p><?php echo $result['description']; ?></p>
    </div>
    
    <!-- Product Configuration -->
    <div class="product-configuration">
        
   </div>

   <!-- Product Pricing -->
   <div class="product-price">
       <span>&#x20B9 <?php echo $result['pro_price']; ?></span>
       <form action="buynow.php" method="get" class="mx-3 "> 
            <input name="proid" value="<?php echo $result['pro_id'];?>" size="1" type="hidden"></input>
            <input type="submit" name="save1" class="btn btn-outline-success my-2 my-sm-2" value="Buy"></input>
            <!-- <i class="bx bx-cart" ></i> -->
            <!-- <a href="http://localhost/LoveTree/productinfo/cart.php" class="btn btn-outline-success my-2 my-sm-0"><i class="bx bx-heart" ></i> Cart</a>
         -->
        </form>
    </div>
 </div>

</div>
    <?php include '../component/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>