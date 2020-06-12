<?php
require_once('condb.php');
require_once('session_manager.php');
 $output = '';
  mysqli_set_charset($condb,"utf8");
  if(isset($_POST["query"]))
{ 
 $search = mysqli_real_escape_string($condb, $_POST["query"]);
 $query = "
  SELECT * FROM lend WHERE code LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM lend  ORDER BY id_lend DESC";
}
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ชื่อผู้ยืม</th>
     <th>อีเมล</th> 
    <th>เบอร์โทร</th>
    <th>ชื่ออุปกรณ์</th>
    <th>จำนวน</th>
    <th>code</th>
    <th>วันที่ยืม</th>
    <th>กำหนดคืน</th>
    <th>ผู้ให้ยืม</th>
    <th>สถานะ</th>
   
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name_l"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["tel"].'</td>
    <td>'.$row["name_t"].'</td>
    <td>'.$row["unit_l"].'</td>
    <td>'.$row["code"].'</td>
    <td>'.$row["date_l"].'</td>
    <td>'.$row["date_s"].'</td>
    <td>'.$row["name_u"].'</td>
    <td>'.$row["status_l"].'</td> 
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'ไมพบข้อมูล';
}

?>

