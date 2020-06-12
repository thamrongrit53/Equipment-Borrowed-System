<?php
require_once('condb.php');
require_once('session_admin.php');
		$date_s=$_POST["date_s"];
		$price_r=$_POST["price_r"];
		$status=$_POST['status_r'];
		$code=$_POST["code"];

		$sql = "UPDATE repair";
		$sql .=" SET status_r='$status',date_s='$date_s',price_r='$price_r' WHERE code='$code'";
  		mysqli_query($condb,$sql); 

  		$upsql = "UPDATE tb_tool";
		$upsql .=" SET status='พร้อมใช้' WHERE code='$code'";
  		mysqli_query($condb,$upsql);  

	if ($sql){
     header("location:update_status_repair_tool_.php");
      }else{
     header("location:error_process.php");
      }

		
                    
?>
