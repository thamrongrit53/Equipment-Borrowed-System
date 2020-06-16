<?php
require_once('condb.php');
require_once('session_admin.php');
  	mysqli_set_charset($condb,"utf8");

 	$id_cat = $_POST['id_cat'];
$cat = $_POST['cat'];
 $sql="INSERT INTO `cat_tool`(`id_cat`,`cat`)VALUES('$id_cat','$cat')";
  $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:add_category_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
