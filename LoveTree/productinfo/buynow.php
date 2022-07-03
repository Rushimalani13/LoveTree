
<?php
session_start();
if(!isset($_SESSION['log']) || $_SESSION['log']!=true)
{
  header("location: ../component/login.php");
  exit;
}
else
{
  if(isset($_SESSION['log']) && $_SESSION['log']==true)
{
    $logdin=true;
}
else
{
    $logdin=false;
}
if(isset($_SESSION['super']) && $_SESSION['super']==true)
{
    $super=true;
}
else
{
    $super=false;
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="http://localhost/LoveTree/">🅻🅾🆅🅴🆃🆁🅴🅴</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/LoveTree/"><b>Home</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b>Plant Catogory</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://localhost/LoveTree/component/catogory/indoor.php"><b>Indoor Plant</b></a></li>
                        <li>
                        <hr class="dropdown-divider">    
                        </li>
   
                        
                        <li><a class="dropdown-item" href="http://localhost/LoveTree/component/catogory/outdoor.php"><b>Outdoor Plant</b></a></li>
                        <li>
                        <hr class="dropdown-divider">    
                        </li>
                 
                        <li><a class="dropdown-item" href="http://localhost/LoveTree/component/catogory/office.php"><b>office Plant</b></a></li>
                        <li>
                        <hr class="dropdown-divider">    
                        </li>

                        <li><a class="dropdown-item" href="http://localhost/LoveTree/component/catogory/health.php"><b>Health Plant</b></a></li>
                        <li>
                        <hr class="dropdown-divider">    
                        </li>
                        <li><a class="dropdown-item" href="http://localhost/LoveTree/component/catogory/flower.php"><b>Flower Plant</b></a></li>
                        <li> 
                        </li>
                        </ul>
                    </li>
                            ';
                            
                echo '  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost/LoveTree/component/plantcare.php"><b>Plant Care & Uses</b></a>
                    </li>';
                    if($super)
                    { 
                        echo '  <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/LoveTree/adminPanel/adminpanel.php"><b>DashBoard</b></a>
                        </li>';
                    }
                    echo' 
                </ul>';

               echo '<form class="d-flex">';
               if($logdin)
               {
                   echo '<a class="btn btn-outline-light bg-primary mx-2" href="http://localhost/LoveTree/productinfo/order.php">Orders</a>';
               
               } 
               if($logdin)
               {
                   echo '<a class="btn btn-outline-light bg-primary mx-2" href="http://localhost/LoveTree/component/logout.php">𝕷𝖔𝖌𝖔𝖚𝖙</a>';
               
               }  
               if(!$logdin)
                {
                    echo '<a class="btn btn-outline-light  mx-2" href="http://localhost/LoveTree/component/signup.php"><i class="bx bx-user"></i></a>';
                }
               echo' </form>
            </div>
    </nav>';

?>
  <?php
  require '../database/dbconn.php';
  // echo "<pre>";
  // print_r($_GET);
  $finalkey = $_GET['proid'];
  // echo "</pre>";
  $sql = "SELECT * FROM `product_item` WHERE `pro_id`='$finalkey'";
  $res = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($res);
  // print_r($result);
  ?>
  <div class="container">

    <img class="mx-4 my-4" src="<?php echo "../adminPanel/" . $result['pro_img']; ?>" alt="img" height="350px" width="350px">
    
    <!-- Right Column -->
    <div class="right-column mx-4">
      <form action="ordersucess.php" method="POST" class="mx-3 ">

      <!-- Product Description -->
      <div class="product-description">
        <span><?php echo $result['pro_cat']; ?></span>
        <input hidden name="finalid" value="<?php echo $result['pro_id']?>"></input>
        <h1><?php echo $result['pro_name']; ?></h1>
        <p><?php echo $result['description']; ?></p>
      </div>
      <div class=" my-2 col-md-6">
        <label for="validationCustom03" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Please provide a valid Name.
        </div>
      </div>
      <div class=" my-2 col-md-3">
        <label for="validationCustom05" class="form-label">Mobile No</label>
        <input name="mobile" type="text" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
          Please provide a valid number.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select name="state" class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>Maharashtra</option>
          <option>Bihar</option>
          <option>Kerala</option>
          <option>Rajasthan</option>
          <option>Punjab</option>

        </select>
        <div name="name" class=" my-2 invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class=" my-2 col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input name="zip" type="text" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>

      <div class=" my-2 col-md-6">
        <label for="validationCustom03" class="form-label">Address</label>
        <input name="address" type="text" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Please provide a valid Address.
        </div>
      </div>

      <!-- Product Pricing -->
      <div class="product-price">
        <span>&#x20B9 <?php echo $result['pro_price']; ?></span>
          <input name="proid" value="<?php echo $result['pro_id']; ?>" size="1" type="hidden"></input>
          <input type="submit" name="save1" class="btn btn-outline-success my-2 my-sm-2" value="PAY"></input>
          <!-- <i class="bx bx-cart" ></i> -->
          <!-- <a href="http://localhost/LoveTree/productinfo/cart.php" class="btn btn-outline-success my-2 my-sm-0"><i class="bx bx-heart" ></i> Cart</a>
         -->
        </form>
      </div>
    </div>

  </div>
  <?php include '../component/footer.php'; ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
</body>

</html>