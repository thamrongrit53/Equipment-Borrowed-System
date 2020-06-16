<?php
require_once('condb.php');
require_once('session_admin.php');
	$id_lo = $_GET["id_lo"];
	$sql = "DELETE FROM location WHERE  id_lo = '".$id_lo."' ";
	$query = mysqli_query($condb,$sql);
if ($query){
     header("location:add_location_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
