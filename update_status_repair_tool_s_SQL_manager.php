<?php
require_once('condb.php');
require_once('session_manager.php');
		$date_s=$_POST["date_s"];
		$price_r=$_POST["price_r"];
		$status=$_POST['status_r'];
		$code=$_POST["code"];

		$sql = "UPDATE repair";
		$sql .=" SET status_r='$status',date_s='$date_s',price_r='$price_r' WHERE code='$code'";
  		mysqli_query($condb,$sql); 
  		if ($status=="ซ่อมเส็จแล้ว") {
  			$upsql = "UPDATE tb_tool";
		$upsql .=" SET status='พร้อมใช้' WHERE code='$code'";
  		mysqli_query($condb,$upsql);  
  		} else {
  				$upsql = "UPDATE tb_tool";
		$upsql .=" SET status='$status' WHERE code='$code'";
  		mysqli_query($condb,$upsql); 
  		}
  		
  		

	if ($sql){
     header("location:update_status_repair_tool_manager.php");
      }else{
     header("location:error_process.php");
      }

		
                    
?>
