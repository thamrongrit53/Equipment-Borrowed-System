<?php
require_once('condb.php');
 require_once('session_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Equipment Borrowed System(EBS)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@700&display=swap" rel="stylesheet">
  <style type="text/css">
   footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
a{
  color: white;
}
  </style>
}
</head>
<body style="height:1500px; font-family: 'K2D', sans-serif;">
 <?php 
 //navbar
require_once('navbar.php'); 
 ?>

<div class="container" style="margin-top:50px">
  <div class="jumbotron">
    <h1>Equipment Borrowed System(EBS)=>admin</h1>      
  </div>  
  <div class="row">

  <?php
  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `type_tool`  ORDER BY id_type DESC";
$result = mysqli_query($condb,$query);
 $query1 = "SELECT * FROM `cat_tool`  ORDER BY id_cat DESC";
$result1 = mysqli_query($condb,$query1);
 $query2 = "SELECT * FROM `location`  ORDER BY id_lo DESC";
$result2 = mysqli_query($condb,$query2);
   ?>
    <div class="col-md-12">
              <button class="btn btn-warning"><a href="admin_sys.php"> กลับ-เมนู</a>
</button>
     <h3 align="center">เพิ่มอุปกรณ์และวัสดุสิ้นเปลือง</h3><br />
       <form action="add_tool_SQL.php" method="POST" enctype="multipart/form-data">
  <label>ประเภท</label>
    <select class="form-control" name="name_type">
      <?php  while($row = mysqli_fetch_array($result))
      {
  ?>
          <option><?php echo $row["type_t"];?></option>
          
   <?php 
    }
    ?>
              </select>
              <label>หมวดหมู่</label>
    <select class="form-control" name="cat">
      <?php  while($row1 = mysqli_fetch_array($result1))
      {
  ?>
          <option><?php echo $row1["cat"];?></option>
          
   <?php 
    }
    ?>
              </select>
          <label>ชื่ออุปกรณ์</label>
    <input type="text" name="name_tool" class="form-control">
        <label>คำอธิบาย</label>
    <textarea  name="detail_tool" class="form-control"></textarea>
      <label>code</label>
    <input type="text" name="code_tool" class="form-control">
    <label>จำนวน</label>
    <input type="text" name="unit" class="form-control">
    <label>หน่วยนับ</label>
 <select class="form-control" name="unit_num">
                <option>อัน</option>
                <option>ชิ้น</option>
                <option>ด้าม</option>
                <option>กล่อง</option>
              </select>
     <label>ราคาต่อหน่วย</label>
     <input type="text" name="price" class="form-control">
     <label>วันที่</label>
     <input type="date" name="date_import" class="form-control">
     <label>สถานที่เก็บ</label>
        <select class="form-control" name="location">
      <?php  while($row2 = mysqli_fetch_array($result2))
      {
  ?>
          <option><?php echo $row2["location"];?></option>
          
   <?php 
    }
    ?>
     </select>
     <label>สถานะ</label>
     <select class="form-control" name="status">
                <option>พร้อมใช้</option>
                <option>ชำรุด</option>
                <option>จำหน่าย</option>
                <option>ส่งซ่อม</option>
              </select>
      <label>รูป</label>
      <input type="file" name="file" class="form-control">
    <br>
     <button class="btn btn-success" type="submit" value="submit" id="submit" name="submit">บันทึก</button>
  </form>
    </div>
  </div>
</div>
 <footer class="py-4 bg-dark text-white-50" style="margin-top: 20px;">
    <div class="container text-center">
      <small>Copyright &copy; SBAC &nbsp;by &nbsp;ไม่นอน</small>
    </div>
  </footer>
</body>
</html>



