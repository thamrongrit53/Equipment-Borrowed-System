<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';
  mysqli_set_charset($condb,"utf8");
  if(isset($_POST["query"]))
{ 
 $search = mysqli_real_escape_string($condb, $_POST["query"]);
 $query = "
  SELECT * FROM disburse WHERE code LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM `disburse` ORDER BY id_d DESC";
}
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <a href="export_withdraw_excel.php?act=excel" class="btn btn-success"> Export->Excel </a>
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
 echo $output;
}
else
{
 echo 'ไมพบข้อมูล';
}

?>

