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
    
    <title>TextDev</title>
</head>

<body>
    <?php
    require '../component/nav.php';
    ?>
    
    <?php include '../component/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>