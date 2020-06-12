<?php
require_once('condb.php');
require_once('session_admin.php');

		$status=$_POST['status_r'];
		$code=$_GET["code"];

		if ($status="ซ่อมเส็จแล้ว") {
			header("location:update_status_repair_tool_s.php?code=$code");
		} else {
     
	$sql = "UPDATE repair";
		$sql .=" SET status_r='$status' WHERE code='$code'";
  		mysqli_query($condb,$sql); 

  		$upsql = "UPDATE tb_tool";
		$upsql .=" SET status='$status' WHERE code='$code'";
  		mysqli_query($condb,$upsql);  

	if ($sql){
     header("location:update_status_repair_tool_.php");
      }else{
     header("location:error_process.php");
      }
		}
		
                    
?>
