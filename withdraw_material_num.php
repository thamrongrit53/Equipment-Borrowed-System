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
       <div class="col-md-12">
    <button class="btn btn-warning"><a href="admin_sys.php"> กลับ-เมนู</a>
</button> <h3 align="center">เบิกวัสดุสิ้นเปลือง</h3><br />
    <?php
$code = $_GET["code"];
mysqli_set_charset($condb,"utf8");
$query = "SELECT * FROM  tb_tool WHERE code='$code'";
$result = mysqli_query($condb,$query);
      while($row = mysqli_fetch_array($result))
      {

   ?>
        <form action="withdraw_material_SQL.php" method="POST">
            <label>code</label>
            <input type="text" name="code" class="form-control" value="<?php echo $row['code']; ?>">
            <label>ชื่อวัสดุ</label>
            <input type="text" name="name_m" class="form-control" value="<?php echo $row['name_t'];?>">
            <label>จำนวนที่มีอยู่</label>
            <input type="text" name="unit_t" class="form-control" value="<?php echo $row['unit'];?>" readonly>
            <label>จำนวนที่เบิก</label>
            <input type="text" name="unit_d" class="form-control" >
            <label>หน่วยนับ</label>
            <input type="text" name="unit" class="form-control" value="<?php echo $row["m_unit"];?>" readonly>
              <label>ชื่อผู้เบิก</label>
            <select class="form-control" name="member">
                <?php  
           mysqli_set_charset($condb,"utf8");
           $query1 = "SELECT * FROM `tb_user`  ORDER BY id_u DESC";
          $result1 = mysqli_query($condb,$query1);
          while($row1 = mysqli_fetch_array($result1))
               {
             ?>
          <option><?php echo $row1["name_u"];?></option>
             <?php 
                 }
            ?>
          </select>
            <label>วันที่เบิก</label>
            <input type="date" name="date_d" class="form-control">

            <label>ผู้ให้เบิก</label>
            <input type="text" name="name_u" class="form-control" value="<?php echo $_SESSION['name_u'];?>" readonly>

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
 <footer class="py-4 bg-dark text-white-50" style="margin-top: 20px;">
    <div class="container text-center">
      <small>Copyright &copy; SBAC &nbsp;by &nbsp;ไม่นอน</small>
    </div>
  </footer>
</body>
</html>
