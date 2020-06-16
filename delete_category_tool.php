<?php
require_once('condb.php');
require_once('session_admin.php');
	$id_cat = $_GET["id_cat"];
	$sql = "DELETE FROM cat_tool WHERE  id_cat = '".$id_cat."' ";
	$query = mysqli_query($condb,$sql);
if ($query){
     header("location:add_category_tool.php");
      			}else{
     header("location:error_process.php");
      			}
?>
