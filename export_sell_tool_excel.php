<?php  
//export.php  
require_once('condb.php');
require_once('session_admin.php');

$output = '';

 $query = "SELECT * FROM `sell` ORDER BY id_sell DESC";
 $result = mysqli_query($condb, $query);
 if(mysqli_num_rows($result) > 0){
 
$output .= '
   <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>code</th>
     <th>ชื่ออุปกรณ์</th>
    <th>จำนวนที่ขาย </th>
    <th>ราคา</th>
    <th>ราคาที่ขาย</th>
    <th>ขายโดย</th>
    <th>ขายให้  </th>
    <th>วันที่ขาย</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["code"].'</td>
    <td>'.$row["name_t"].'</td>
     <td>'.$row["unit"]." ".$row["m_unit"].'</td>
    <td>'.$row["price"].'</td>
    <td>'.$row["price_sell"].'</td>
    <td>'.$row["sell_by"].'</td>
    <td>'.$row["sell_to"].'</td>
    <td>'.$row["date_sell"].'</td> 
   </tr>
  ';
 }
  $output .= '</table>';
header("Content-Type: application/vnd.ms-excel"); // ประเภทของไฟล์
header('Content-Disposition: attachment; filename=report_sell_re.xls');
header("Content-Type: application/force-download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Type: application/octet-stream"); 
header("Content-Type: application/download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Transfer-Encoding: binary"); 
header("Content-Length: ".filesize("report_sell_re.xls"));   
 
  echo $output;
 }

?>