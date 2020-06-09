<?php
require_once('condb.php');
require_once('session_admin.php');
	$id_type = $_GET["id_type"];
	$sql = "DELETE FROM type_tool WHERE  id_type = '".$id_type."' ";
	$query = mysqli_query($condb,$sql);
if ($query){
     header("location:add_type_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
