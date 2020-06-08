<?php 
session_start();
  if($_SESSION['name_u'] == "")
  {
    echo "Please Login!";
    exit();
  }

  if($_SESSION['status'] != "ADMIN")
  {
    echo "This page for Admin only!";
    exit();
  } 
  mysqli_set_charset($condb,"utf8");

 ?>