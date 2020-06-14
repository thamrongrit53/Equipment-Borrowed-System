<?php
require_once('condb.php');
require_once('session_manager.php');
 $output = '';
  mysqli_set_charset($condb,"utf8");
  if(isset($_POST["query"]))
{ 
 $search = mysqli_real_escape_string($condb, $_POST["query"]);
 $query = "
  SELECT * FROM tb_tool WHERE status='ชำรุด'AND code LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM `tb_tool` WHERE status='ชำรุด' ORDER BY id_t DESC";
}
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
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
    <th>รูป</th>
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
    <td><a target="_blank" href="img_tool/'.$row["img"].'"><img src="img_tool/'.$row["img"].'" style="width: 100px;height: 150px;"></td>
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

