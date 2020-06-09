<?php
require_once('condb.php');
require_once('session_admin.php');
 	$name_type = $_POST['name_type'];
$id_type = $_POST['id_type'];
 $sql="INSERT INTO `type_tool`(`id_type`,`type_t`)VALUES('$id_type','$name_type')";
  mysqli_query($condb,$sql);   
	if ($sql){
     header("location:add_type_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
