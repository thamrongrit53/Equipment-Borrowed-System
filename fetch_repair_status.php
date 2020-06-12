<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';
  mysqli_set_charset($condb,"utf8");
  if(isset($_POST["query"]))
{ 
 $search = mysqli_real_escape_string($condb, $_POST["query"]);
 $query = "
  SELECT * FROM repair WHERE code LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM `repair` ORDER BY id_r DESC";
}
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>code</th>
     <th>ชื่ออุปกรณ์</th>
    <th>จำนวนที่ส่งซ่อม</th>
    <th>วันที่ส่งซ่อม </th>
    <th>สถานที่ซ่อม</th>
    <th>เบอร์โทร</th>
    <th>ชื่อผู้ส่งซ่อม</th>
    <th>สถานะ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["code"].'</td>
    <td>'.$row["name_t"].'</td>
    <td>'.$row["unit_r"]." ".$row["m_unit_m"].'</td>
    <td>'.$row["date_sub"].'</td> 
    <td>'.$row["location_r"].'</td>
    <td>'.$row["tel"].'</td> 
    <td>'.$row["name_u"].'</td>
     <td>
  <form action="update_status_repair_tool_SQL.php?code='.$row["code"].'" method="POST">
        <select class="form-control" name="status_r">
          <option>'.$row["status_r"].'</option>
                <option>กำลังซ่อม</option>
                <option>ซ่อมเส็จแล้ว</option>
              </select>
       <button class="btn btn-success" type="submit" value="submit" style="margin-top: 10px;">บันทึก</button>
      </form>

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

