<?php

echo '<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">  
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  
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
          <a href="#" class="active">
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

</body>
</html>';
