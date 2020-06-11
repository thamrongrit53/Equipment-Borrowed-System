<?php
require_once('condb.php');
require_once('session_admin.php');

$name_type = $_POST['name_type'];
$name_tool = $_POST['name_tool'];
$detail_tool=$_POST['detail_tool'];
$code_tool=$_POST['code_tool'];
$unit=$_POST['unit'];
$unit_num=$_POST['unit_num'];
$price=$_POST['price'];
$date_import=$_POST['date_import'];
$location=$_POST['location'];
$status=$_POST['status'];
$image = $_FILES['file']['name']; 
if (empty($image)) {
  $image= $img=$_GET['img'];
}
 
$target = "img_tool/".basename($image);
   if (move_uploaded_file($_FILES['file']['tmp_name'],$target)) {
        $msg = "Image uploaded successfully";
     }else{
        $msg = "Failed to upload image";
     }

 $sql="UPDATE`tb_tool` SET`name_t`='$name_tool',detail='$detail_tool',code='$code_tool',type_t='$name_type',unit='$unit',m_unit='$unit_num',price='$price',import_date='$date_import',location='$location',status='$status',img='$image' WHERE code='$code_tool'";
  $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:report_tool_store.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
