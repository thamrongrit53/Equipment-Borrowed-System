<?php  
//export.php  
require_once('condb.php');
require_once('session_admin.php');

$output = '';

 $query = "SELECT * FROM `disburse` ORDER BY id_d DESC";
 $result = mysqli_query($condb, $query);
 if(mysqli_num_rows($result) > 0){
 
$output .= '
   <div class="table-responsive">
   <table class="table table bordered">
    <tr>
    <th>code</th>
    <th>ชื่อวัสดุ </th>
    <th>จำนวนที่เบิก  </th>
    <th>ชื่อผู้เบิก </th>
    <th>วันที่เบิก  </th>
    <th>ให้เบิกโดย</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["code"].'</td>
    <td>'.$row["name_m"].'</td>
    <td>'.$row["unit_d"]." ".$row["d_unit"].'</td>
    <td>'.$row["member_d"].'</td>
    <td>'.$row["date_d"].'</td>
     <td>'.$row["name_u"].'</td>
  ';
 }
  $output .= '</table>';
header("Content-Type: application/vnd.ms-excel"); // ประเภทของไฟล์
header('Content-Disposition: attachment; filename=report_withdraw_re.xls');
header("Content-Type: application/force-download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize("report_withdraw_re.xls"));   
 
  echo $output;
 }

?>