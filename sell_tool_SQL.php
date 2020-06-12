<?php
require_once('condb.php');
require_once('session_admin.php');

$code = $_POST['code'];
$name_t = $_POST['name_t'];
$unit_r=$_POST['unit_r'];
$m_unit_m = $_POST['m_unit_m'];
$price = $_POST['price'];
$price_sell = $_POST['price_sell'];
$sell_by = $_POST['sell_by'];
$sell_to = $_POST['sell_to'];
$date_sell = $_POST['date_sell'];

$sql="INSERT INTO `sell`(`code`, `name_t`, `unit`, `m_unit`, `price`, `price_sell`, `sell_by`, `sell_to`, `date_sell`) VALUES ('$code','$name_t','$unit_r','$m_unit_m','$price','$price_sell','$sell_by','$sell_to','$date_sell')";
	$sql_d = "DELETE FROM tb_tool WHERE code = '".$code."' ";
	mysqli_query($condb,$sql_d);
  $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:sell_tool.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
