<?php
  session_start();
  if($_SESSION['name_u'] == "")
  {
    echo "Please Login!";
    exit();
  }

  if($_SESSION['status'] != "MANAGER")
  {
    echo "This page for Manager only!";
    exit();
  } 
  mysqli_set_charset($condb,"utf8");
?>