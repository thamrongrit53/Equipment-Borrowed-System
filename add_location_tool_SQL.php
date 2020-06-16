<?php
require_once('condb.php');
require_once('session_admin.php');
  	mysqli_set_charset($condb,"utf8");

 	$id_lo = $_POST['id_lo'];
$location = $_POST['location'];
 $sql="INSERT INTO `location`(`id_lo`,`location`)VALUES('$id_lo','$location')";
  $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:add_location_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
