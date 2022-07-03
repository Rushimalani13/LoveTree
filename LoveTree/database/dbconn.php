<?php

$servername="localhost";
$username="root";
$password="";
$database="lovetree";
$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn)
{
  die("Failed to Connect!! ".mysqli_connect_error());
}


?>