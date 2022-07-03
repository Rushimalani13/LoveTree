<?php

require '../database/dbconn.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $heading=$_POST['head'];
    $description=$_POST['description'];
    $pro_img=$_FILES['articalimg'];
//     print_r($pro_name);
//     print_r($pro_price);
//     print_r($pro_img);

    $proimg=$pro_img['name'];
    $proerror=$pro_img['error'];
    $prolocationtmp=$pro_img['tmp_name'];

    $proext=explode('.',$proimg);
    $procheck=strtolower(end($proext));

    $filestored=array('jpg','png','jpeg');

    if(in_array($procheck,$filestored))
    {
        $filelocation='uploadimg/'.$proimg;
        move_uploaded_file($prolocationtmp,$filelocation);

        $sql="INSERT INTO `artical`(`heading`, `description`, `artical_img`) VALUES ('$heading','$description','$filelocation')";

        $res=mysqli_query($conn,$sql);
    }
}

echo '<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">  
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>  
<body>
<div class="sidebar">
<div class="logo-details">
  <i class="bx bxl-c-plus-plus"></i>
  <a href="http://localhost/LoveTree/"><span class="logo_name">LoveTree</span></a>
</div>
  <ul class="nav-links">
    <li>
      <a href="http://localhost/LoveTree/adminPanel/adminpanel.php" class="active">
        <i class="bx bx-grid-alt" ></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/LoveTree/adminPanel/orderlist.php">
        <i class="bx bx-list-ul" ></i>
        <span class="links_name">Order list</span>
      </a>
    </li>
    <li>
      <a href="http://localhost/LoveTree/adminPanel/additem.php">
        <i class="bx bx-coin-stack" ></i>
        <span class="links_name">Add Items</span>
      </a>
    </li>
    <li>
    <a href="http://localhost/LoveTree/adminPanel/addartical.php">
      <i class="bx bx-coin-stack" ></i>
      <span class="links_name">Add Artical</span>
    </a>
  </li>
    <li>
      <a href="http://localhost/LoveTree/adminPanel/user.php">
        <i class="bx bx-user" ></i>
        <span class="links_name">Users</span>
      </a>
    </li>
  </ul>
</div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">

    <div class="container my-4 ms-150 mx-4">
    <form action="addartical.php" class="needs-validation" method="post" enctype="multipart/form-data">
      <h1>ADD Artical</h1>
      <div class="mb-3 col-8">
        <label for="Name" class="form-label">Heading</label>
        <input type="name" name="head" class="form-control" id="Name" aria-describedby="emailHelp" placeholder="Heading" required >
      </div>
      
      <label for="Name" class="form-label col-8">Description</label>
      <div class="form-floating">
        <textarea name="description" class="form-control" placeholder="Type Here" id="floatingTextarea"></textarea>
      </div>
    
      <div class="mb-3 col-8">
        <label for="myfile" class="form-label">Image</label><br>
        <input type="file" name="articalimg" class="form-control-file" id="myfile">

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
    </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
 </script>

</body>
</html>';

?>
