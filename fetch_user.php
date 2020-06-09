<?php
require_once('condb.php');
require_once('session_admin.php');
 $output = '';

  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `tb_user`  ORDER BY id_u DESC";
$result = mysqli_query($condb,$query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ชื่อ-นามสกุล</th>
     <th>อีเมล</th>
     <th>ตำแหน่ง</th>
     <th>เบอร์โทร</th>
     <th>สถานะ</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name_u"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["posi"].'</td>
    <td>'.$row["tel"].'</td>
     <td>
     	<form action="update_status.php?id_u='.$row["id_u"].'" method="POST">
				<select class="form-control" name="status">
     			<option>'.$row["status"].'</option>
                <option>ADMIN</option>
                <option>MANAGER</option>
                <option>USER</option>
              </select>
       <button class="btn btn-success" type="submit" value="submit" style="margin-top: 10px;">บันทึก</button>
       <button class="btn btn-danger" style="margin-top: 10px;"><a href="delete_user.php?id_u='.$row["id_u"].'">ลบ</a></button>
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

