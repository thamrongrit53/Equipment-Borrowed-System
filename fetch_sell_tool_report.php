<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';
  mysqli_set_charset($condb,"utf8");
  if(isset($_POST["query"]))
{ 
 $search = mysqli_real_escape_string($condb, $_POST["query"]);
 $query = "
  SELECT * FROM sell WHERE code LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM `sell` ORDER BY id_sell DESC";
}
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <a href="export_sell_tool_excel.php?act=excel" class="btn btn-success"> Export->Excel </a>
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
 echo $output;
}
else
{
 echo 'ไมพบข้อมูล';
}

?>

