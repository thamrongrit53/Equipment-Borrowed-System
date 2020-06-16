<?php
require_once('condb.php');
require_once('session_admin.php');

mysqli_set_charset($condb,"utf8");

$name_type = $_POST['name_type'];
$cat = $_POST['cat'];
$type=$_POST['type'];
if ($name_type=="วัสดุสิ้นเปลือง") {
  $ste="S";
} else {
  $ste="I";
}
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
$target = "img_tool/".basename($image);
   if (move_uploaded_file($_FILES['file']['tmp_name'],$target)) {
        $msg = "Image uploaded successfully";
     }else{
        $msg = "Failed to upload image";
     }

$query1 = "SELECT id_cat FROM `cat_tool` WHERE cat='$cat'";
$result1 = mysqli_query($condb,$query1);
$id_c = mysqli_fetch_array($result1);

$query = "SELECT id_type FROM `type_tool` WHERE type_t='$type'";
$result = mysqli_query($condb,$query);
$id_t = mysqli_fetch_array($result);
$encode=$id_t["id_type"]."-".$id_c["id_cat"]."-".$code_tool.$ste;

 $sql="INSERT INTO `tb_tool`(`name_t`,detail,code,type_t,type,cat,unit,m_unit,price,import_date,location,status,img)VALUES('$name_tool','$detail_tool','$encode','$name_type','$type','$cat','$unit','$unit_num','$price','$date_import','$location','$status','$image')";
  $query=mysqli_query($condb,$sql);   
  if ($query){
     header("location:add_tool_user.php");
            }else{
     header("location:error_process.php");
            }
     
?>
