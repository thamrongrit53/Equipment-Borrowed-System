<?php
require_once('condb.php');
require_once('session_admin.php');
 	$name = $_POST['name'];
$position = $_POST['position'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$status=$_POST['status'];

 $sql="INSERT INTO `tb_user`(`name_u`,`posi`,`email`,`tel`,status)VALUES('$name','$position','$email','$tel','$status')";
  mysqli_query($condb,$sql);   
	if ($sql){
     header("location:add_user.php");
      			}else{
     header("location:error_process.php");
      			}
                    
?>
