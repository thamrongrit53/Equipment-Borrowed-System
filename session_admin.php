<?php 
session_start();
  if($_SESSION['name_u'] == "")
  {
    echo "Please Login!";
    sleep(5);
    header("location:home.php");
    exit();
  }

  if($_SESSION['status'] != "ADMIN")
  {
    echo "This page for Admin only!";
    sleep(5);
    header("location:home.php");
    exit();
  } 
  mysqli_set_charset($condb,"utf8");

 ?>