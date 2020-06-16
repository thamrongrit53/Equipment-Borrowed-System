<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';

  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `cat_tool` ORDER BY id_cat DESC";
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>รหัสหมวดหมู่</th>
     <th>หมวดมู่</th>
    <th>ลบ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id_cat"].'</td>
    <td>'.$row["cat"].'</td>
     <td>
       <button class="btn btn-danger" style="margin-top: 10px;"><a href="delete_category_tool.php?id_cat='.$row["id_cat"].'">ลบ</a></button>
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

