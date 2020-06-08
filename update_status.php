<?php
require_once('condb.php');
require_once('session_admin.php');

		$status=$_POST['status'];
	$sql = "UPDATE tb_user";
		$sql .=" SET status='$status' WHERE id_u = '".$_GET["id_u"]."' ";
  		mysqli_query($condb,$sql);   
	if ($sql){
     header("location:add_user.php");
      			}else{
     header("location:error_process.php");
      			}
                    
?>
