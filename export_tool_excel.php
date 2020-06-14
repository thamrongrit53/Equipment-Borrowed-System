<?php  
//export.php  
require_once('condb.php');
require_once('session_admin.php');

$output = '';

$query = "SELECT * FROM `tb_tool` WHERE type_t!='วัสดุสิ้นเปลือง' ORDER BY id_t DESC";
 $result = mysqli_query($condb, $query);
 if(mysqli_num_rows($result) > 0){
 
$output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ชื่ออุปกรณ์</th>
     <th>คำอธิบาย</th>
    <th>ประเภท</th>
    <th>code</th>
    <th>จำนวน</th>
    <th>ราคาต่อหน่วย</th>
    <th>วันที่</th>
    <th>สถานที่เก็บ</th>
    <th>สถานะ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name_t"].'</td>
    <td>'.$row["detail"].'</td>
    <td>'.$row["type_t"].'</td>
    <td>'.$row["code"].'</td>
    <td>'.$row["unit"]." ".$row["m_unit"].'</td>
    <td>'.$row["price"].'</td>
    <td>'.$row["import_date"].'</td>
    <td>'.$row["location"].'</td>
    <td>'.$row["status"].'</td> 
   
   </tr>
  ';
 }
  $output .= '</table>';
header("Content-Type: application/vnd.ms-excel"); // ประเภทของไฟล์
header('Content-Disposition: attachment; filename=report_tool.xls');
header("Content-Type: application/force-download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize("report_tool.xls"));   
 
  echo $output;
 }

?>