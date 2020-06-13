<?php
require_once('condb.php');
require_once('session_user.php');

$code=$_POST['code'];
$name_t=$_POST['name_t'];
$unit_r=$_POST['unit_r'];
$m_unit_m=$_POST['m_unit_m'];
$date_sub=$_POST['date_sub'];
$location_r=$_POST['location_r'];
$tel=$_POST['tel'];
$name_u=$_POST['name_u'];
$status_r=$_POST['status_r'];


 $sql="INSERT INTO `repair`(`code`, `name_t`, `unit_r`, `m_unit_m`, `date_sub`, `location_r`, `tel`, `name_u`, `status_r`) VALUES ('$code','$name_t','$unit_r','$m_unit_m','$date_sub','$location_r','$tel','$name_u','$status_r')";

   $query=mysqli_query($condb,$sql);   
	if ($query){
		 $upsql="UPDATE `tb_tool` SET `status`='$status_r' WHERE code='$code'";
		$queryup=mysqli_query($condb,$upsql);
     	header("location:notify_repair_tool_user.php");
      			}else{
      	header("location:error_process.php");
      			}
 
 

     
?>
