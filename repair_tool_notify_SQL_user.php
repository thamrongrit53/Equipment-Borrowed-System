<?php
require_once('condb.php');
require_once('session_user.php');

$code_tool=$_GET["code"];
$status=$_POST['status'];


 $sql="UPDATE`tb_tool` SET status='$status' WHERE code='$code_tool'";
  mysqli_query($condb,$sql);   
	if ($sql){
     header("location:repair_tool_user.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
