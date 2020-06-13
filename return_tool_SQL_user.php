<?php
require_once('condb.php');
require_once('session_user.php');

$date_r = $_POST['date_r'];
$name_r = $_POST['name_r'];
$status_l = "คืน";
$code_tool=$_POST['code'];

 $sql="UPDATE`lend` SET`date_r`='$date_r',name_r='$name_r',status_l='$status_l' WHERE code='$code_tool'";
  $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:return_user.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
