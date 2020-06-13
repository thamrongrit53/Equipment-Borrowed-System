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
       <div class="col-md-12">
    <button class="btn btn-warning"><a href="member_sys.php"> กลับ-เมนู</a>
</button> <h3 align="center">คืนอุปกรณ์/เครื่องมือ</h3><br />
    <?php
$code = $_GET["code"];
mysqli_set_charset($condb,"utf8");
$query = "SELECT * FROM  lend WHERE code='$code'";
$result = mysqli_query($condb,$query);
      while($row = mysqli_fetch_array($result))
      {

   ?>
        <form action="return_tool_SQL_user.php" method="POST">
            <label>วันที่คืน</label>
            <input type="date" name="date_r" class="form-control">
            <label>ชื่อผู้ยืม</label>
            <input type="text" name="name_l" class="form-control" value="<?php echo $row["name_l"];?>" readonly>
            <label>อีเมล</label>
            <input type="text" name="email" class="form-control" value="<?php echo $row["email"];?>" readonly>
            <label>เบอร์โทร</label>
            <input type="text" name="tel" class="form-control" value="<?php echo $row["tel"];?>" readonly>
            <label>code</label>
            <input type="text" name="code" class="form-control"value="<?php echo $row["code"];?>" readonly>
             <label>ชื่ออุปกรณ์</label>
            <input type="text" name="name_t" class="form-control"value="<?php echo $row["name_t"];?>" readonly>
             <label>จำนวน</label>
            <input type="text" name="unit" class="form-control" value="<?php echo $row["unit_l"];?>" readonly>
             <label>ชื่อผู้ให้ยืม</label>
            <input type="text" name="name_u" class="form-control"value="<?php echo $row["name_u"];?>" readonly>
             <label>วันที่ยืม</label>
            <input type="date" name="date_l" class="form-control"value="<?php echo $row["date_l"];?>" readonly>
             <label>กำหนดส่งคืน </label>
            <input type="date" name="date_s" class="form-control"value="<?php echo $row["date_s"];?>" readonly>
            <br>
            <button class="btn btn-success" type="submit" value="submit" id="submit" name="submit">บันทึก</button>
        </form>
      <?php 

    } 

    ?>
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
