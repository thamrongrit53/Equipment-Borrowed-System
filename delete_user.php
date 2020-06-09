<?php
require_once('condb.php');
require_once('session_admin.php');
	$id_u = $_GET["id_u"];
	$sql = "DELETE FROM tb_user WHERE  id_u = '".$id_u."' ";
	$query = mysqli_query($condb,$sql);
if ($query){
     header("location:add_user.php");
      			}else{
     header("location:error_process.php");
      			}
?>
