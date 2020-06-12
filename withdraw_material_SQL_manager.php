<?php
require_once('condb.php');
require_once('session_manager.php');

$code=$_POST['code'];
$name_m=$_POST['name_m'];
$unit_d=$_POST['unit_d'];
$unit=$_POST['unit'];
$member=$_POST['member'];
$date_d=$_POST['date_d'];
$name_u=$_POST['name_u'];
$unit_t=$_POST['unit_t'];

 if ($unit_t < $unit_d) {
 	header("location:error_process.php");
 } else {
   $as=$unit_t-$unit_d;
 $sql="INSERT INTO `disburse`(`code`,`name_m`,`unit_d`,`d_unit`,`member_d`,`date_d`,`name_u`)VALUES('$code','$name_m','$unit_d','$unit','$member','$date_d','$name_u')";

   $query=mysqli_query($condb,$sql);   
	if ($query){
		 $upsql="UPDATE `tb_tool` SET `unit`='$as' WHERE code='$code'";
		$queryup=mysqli_query($condb,$upsql);
     	header("location:withdraw_material_manager.php");
      			}else{
      	header("location:error_process.php");
      			}
 }
 

     
?>
