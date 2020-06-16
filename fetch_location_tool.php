<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';

  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `location` ORDER BY id_lo DESC";
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>รหัสถานที่เก็บ</th>
     <th>สถานที่เก็บ</th>
    <th>ลบ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id_lo"].'</td>
    <td>'.$row["location"].'</td>
     <td>
       <button class="btn btn-danger" style="margin-top: 10px;"><a href="delete_location_tool.php?id_lo='.$row["id_lo"].'">ลบ</a></button>
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

