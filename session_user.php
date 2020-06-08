<?php
  session_start();
  if($_SESSION['name_u'] == "")
  {
    echo "Please Login!";
    exit();
  }

  if($_SESSION['status'] != "USER")
  {
    echo "This page for Member only!";
    exit();
  } 
  mysqli_set_charset($condb,"utf8");
?>