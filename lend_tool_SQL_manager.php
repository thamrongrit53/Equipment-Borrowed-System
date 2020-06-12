<?php
require_once('condb.php');
require_once('session_manager.php');


$name_l=$_POST['name_l'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$code=$_POST['code'];
$name_t=$_POST['name_t'];
$unit_l=$_POST['unit'];
$name_u=$_POST['name_u'];
$date_l=$_POST['date_l'];
$date_s=$_POST['date_s'];
$status_l="ยืม";

 $sql="INSERT INTO `lend`( `code`, `name_t`, `email`, `tel`, `unit_l`, `name_l`, `name_u`, `date_l`, `date_s`, `status_l`) VALUES ('$code','$name_t','$email','$tel','$unit_l','$name_l','$name_u','$date_l','$date_s','$status_l')";

   $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:lend_manager.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
