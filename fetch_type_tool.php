<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';

  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `type_tool` ORDER BY id_type DESC";
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>รหัสประเภท</th>
     <th>ชื่อประเภท</th>
    <th>ลบ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id_type"].'</td>
    <td>'.$row["type_t"].'</td>
     <td>
       <button class="btn btn-danger" style="margin-top: 10px;"><a href="delete_type_tool.php?id_type='.$row["id_type"].'">ลบ</a></button>
     	</td>
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

