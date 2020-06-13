<?php
require_once('condb.php');
 require_once('session_user.php');
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
    <h1>Equipment Borrowed System(EBS)=>user</h1>      
  </div>  
      <div class="row">

  <?php
  $code = $_GET["code"];
  mysqli_set_charset($condb,"utf8");
 $query = "SELECT * FROM `tb_tool`  WHERE code='$code'";
$result = mysqli_query($condb,$query);
   ?>
    <div class="col-md-12">
              <button class="btn btn-warning"><a href="member_sys.php"> กลับ-เมนู</a>
</button>
     <h3 align="center">บันทึกอุปกรณ์/เครื่องมือชำรุด</h3><br />
         <?php  while($row = mysqli_fetch_array($result))
      {
  ?>
       <form action="repair_tool_notify_SQL_user.php?code=<?php echo $row["code"];?>" method="POST" enctype="multipart/form-data"> 
  <label>ชื่อประเภท</label>
      <input type="text" name="name_type" class="form-control" value="<?php echo $row["type_t"];?>"readonly>
       <label>ชื่ออุปกรณ์</label>
    <input type="text" name="name_tool" class="form-control" value="<?php echo $row["name_t"];?>"readonly>
        <label>คำอธิบาย</label>
    <textarea  name="detail_tool" class="form-control" value="" readonly><?php echo $row["detail"];?></textarea>
      <label>code</label>
    <input type="text" name="code_tool" class="form-control" value="<?php echo $row["code"];?>" readonly>
    <label>จำนวน</label>
    <input type="text" name="unit" class="form-control" value="<?php echo $row["unit"];?>" readonly>
    <label>หน่วยนับ</label>
     <input type="text" name="unit_num" class="form-control" value="<?php echo $row["m_unit"];?>" readonly>
     <label>ราคาต่อหน่วย</label>
     <input type="text" name="price" class="form-control" value="<?php echo $row["price"];?>" readonly>
     <label>วันที่</label>
     <input type="date" name="date_import" class="form-control" value="<?php echo $row["import_date"];?>"readonly>
     <label>สถานที่เก็บ</label>
     <input type="text" name="location" class="form-control" value="<?php echo $row["location"];?>"readonly>
     <label>สถานะ</label>
     <select class="form-control" name="status">
        <option><?php echo $row["status"];?></option>
              
                                <option>ชำรุด</option>

              </select>
      <label>รูป</label>
      <br>
      <img src="img_tool/<?php echo $row["img"];?>" style="width: 100px;height: 150px;">
    <br>
     <button class="btn btn-success" type="submit" value="submit" id="submit" name="submit">บันทึก</button>

  </form>
   <?php 
    }
    ?>
    </div>
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
