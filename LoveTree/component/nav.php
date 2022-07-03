<?php
session_start();
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