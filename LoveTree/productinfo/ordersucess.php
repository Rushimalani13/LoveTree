<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<?php
require '../database/dbconn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $finalkey = $_POST['finalid'];

    $sql = "SELECT * FROM `usersdata`";
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($res);
    session_start();    
    $orderby = $_SESSION['username'];
    $orderbyid = $result['userid'];

    $sql = "SELECT * FROM `product_item` WHERE `pro_id`='$finalkey'";
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($res);
    $plantname = $result['pro_name'];
    $plantid = $result['pro_id'];
    $plantprice = $result['pro_price'];

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];

    //     print_r($pro_name);
    //     print_r($pro_price);
    //     print_r($pro_img);

    // print_r($orderby);
    // echo "<br>";
    // print_r($orderbyid);
    // echo "<br>";
    // echo "<br>";
    // print_r($plantname);
    // echo "<br>";
    // print_r($plantid);
    // echo "<br>";
    // echo "<br>";
    // print_r($plantprice);
    // echo "<br>";
    // print_r($name);
    // echo "<br>";
    // echo "<br>";
    // print_r($mobile);
    // echo "<br>";
    // print_r($state);
    // echo "<br>";
    // echo "<br>";
    // print_r($zip);
    // echo "<br>";
    // print_r($address);
    // echo "<br>";


    $sql = "INSERT INTO `orderdetails` (`ordno`, `orderby`, `orderbyid`, `plantname`, `plantid`, `plantprice`, `name`, `mobile`, `state`, `zip`, `address`, `time_dt`) VALUES (NULL, '$orderby', ' $orderbyid', '$plantname', '$plantid', ' $plantprice', '$name', '$mobile', '$state', '$zip', '$address', current_timestamp());";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Thanks For Ordering!</h4>
        <p>Aww yeah, you successfully placed the order.Your order will
        delivered soon, All the update related to order you get on your email or mobile number.</p>
        <hr>
        <p class="mb-0">Wish you a Happy Day!!</p>
      </div>';
        
        echo '<button onclick="history.back()">Go Back</button>';
    
    }
}
?>
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</html>
