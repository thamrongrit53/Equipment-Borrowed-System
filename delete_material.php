<?php
require_once('condb.php');
require_once('session_admin.php');
	$code = $_GET["code"];
	$sql = "DELETE FROM tb_tool WHERE code = '".$code."' ";
	$query = mysqli_query($condb,$sql);
if ($query){
     header("location:report_material_store.php");
      			}else{
     header("location:error_process.php");
      			}
?>
