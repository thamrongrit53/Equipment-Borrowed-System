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
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@700&display=swap"rel="stylesheet">
  <style type="text/css">

   footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
    button{
      width: 350px;
      height: 200px;
    }


  </style>
</head>
<body style="height:1500px; font-family: 'K2D', sans-serif;">
 <?php 
 //navbar
require_once('navbar.php'); 

  
$query="SELECT COUNT(id_lend) AS num  FROM lend WHERE status_l='ยืม'";
$result = mysqli_query($condb,$query);
$objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);

$query1="SELECT COUNT(id_lend) AS num1  FROM lend WHERE status_l='คืน'";
$result1 = mysqli_query($condb,$query1);
$objResult1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

$query2="SELECT COUNT(id_r) AS num2  FROM repair WHERE status_r!='ซ่อมเส็จแล้ว'";
$result2 = mysqli_query($condb,$query2);
$objResult2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);

$query3="SELECT COUNT(id_t) AS num3  FROM tb_tool WHERE status='ชำรุด'";
$result3 = mysqli_query($condb,$query3);
$objResult3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
 ?>

<div class="container" style="margin-top:50px">
  <div class="jumbotron">
    <h1>Equipment Borrowed System(EBS)=>admin</h1>      
  </div>  
</div>
<div class="container" style="margin-top: 20px;">
  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-3">
    <div class="card bg-info text-white" style="border-radius: 20px;">
    <div class="card-body text-center">
      <h2>ยืม</h2><br>
       <h2><?php echo $objResult["num"]; ?></h2><br> 
      </div>
      </div>
    </div>
    <div class="col-sm-3">
    <div class="card bg-info text-white"style="border-radius: 20px;">
    <div class="card-body text-center">
        <h2>คืน</h2><br>
       <h2><?php echo $objResult1["num1"]; ?></h2><br> 
   </div>
  </div>
    </div>
    <div class="col-sm-3">
      <div class="card bg-info text-white"style="border-radius: 20px;">
    <div class="card-body text-center">
      <h2>รายการซ่อม</h2><br>
      <h2><?php echo $objResult2["num2"]; ?></h2><br> 
    </div>
  </div>
    </div>
    <div class="col-sm-3">
  <div class="card bg-info text-white"style="border-radius: 20px;">
    <div class="card-body text-center">
      <h2>ชำรุด</h2><br>
        <h2><?php echo $objResult3["num3"]; ?></h2><br> 
    </div>
  </div>
    </div>
  </div>

</div>
<div class="container" style="margin-bottom: 20px;">
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4"> 
    <div class="dropdown"> 

    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
         <img src="img/png/designer.png" style="width: 80px;height: 80px;">
<br>ให้สิทธิ์การใช้งาน
    </button>
    <div class="dropdown-menu">

      <a class="dropdown-item" href="add_user.php">ลงทะเบียนผู้ใช้งาน/ให้สิทธิ์</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4">  
          <div class="dropdown">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">   
      <img src="img/png/inventory.png" style="width: 80px;height: 80px;">
<br>
    บันทึกข้อมูล/จำนวนเครื่องมือ/วัสดุสิ้นเปลือง</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="add_type_tool.php">เพิ่มชื่อประเภท/หมวดหมู่</a>
      <a class="dropdown-item" href="add_tool.php">เพิ่มรายการอุปกรณ์ใหม่/วัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_material_store.php">แก้ไขข้อมูลวัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_tool_store.php">แก้ไขข้อมูลอุปกรณ์</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4"> 
             <div class="dropdown">
 
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                       <img src="img/png/study1.png" style="width: 80px;height: 80px;">
<br>บันทึกอุปกรณ์ชำรุด</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="repair_tool.php">แจ้งอุปกรณ์ชำรุด</a>
    </div>
  </div> 
    </div>  
 </div>
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4">  
              <div class="dropdown">

    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        <img src="img/png/company.png" style="width: 80px;height: 80px;">
<br> ส่งซ่อมเครื่องมือ/อุปกรณ์ </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="notify_repair_tool.php">แจ้งซ่อม</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4">
             <div class="dropdown">

    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                       <img src="img/png/study.png" style="width: 80px;height: 80px;">
<br> ปรับสถานะเครื่องมือ/อุปกรณ์ที่ซ่อมเสร็จแล้ว</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="update_status_repair_tool_.php">ปรับสถานะ</a>
  
    </div>
  </div>  
    </div> 
     <div class="col-md-4">  
              <div class="dropdown">

    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                        <img src="img/png/strategy.png" style="width: 80px;height: 80px;">
<br>  จำหน่ายเครื่องมือ/อุปกรณ์</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="sell_tool.php">จำหน่าย/อุปกรณ์</a>
    </div>
  </div>
    </div>  
 </div>

<div class="row" style="margin-top: 20px;">
  <div class="col-md-4">
            <div class="dropdown">
 
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    <img src="img/png/work.png" style="width: 80px;height: 80px;">
<br>   รายงานทั้งหมด</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="report_tool.php">รายการอุปกรณ์/เครื่องมือ</a>
      <a class="dropdown-item" href="report_material.php">รายการวัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_notify_repair.php">รายการอุปรกรณ์ชำรุด</a>
      <a class="dropdown-item" href="report_lend_tool.php">รายการยืม/คืน</a>
      <a class="dropdown-item" href="report_withdraw_material.php">รายการเบิก</a>
      <a class="dropdown-item" href="report_sell_tool.php">รายการจำหน่ายอุปกรณ์/เครื่องมือ</a>


    </div>
  </div>
  </div>

    <div class="col-md-4">
            <div class="dropdown">
 
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    <img src="img/png/test.png" style="width: 80px;height: 80px;">
<br>  ยืม/คืน/เบิกวัสดุ</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="lend.php">ยืม</a>
      <a class="dropdown-item" href="return.php">คืน</a>
      <a class="dropdown-item" href="withdraw_material.php">เบิกวัสดุ</a>
    </div>
  </div>
  </div>

</div>
</div>
 <footer class="py-4 bg-dark text-white-50" style="margin-top:100px;">
    <div class="container text-center">
      <small>Copyright &copy; SBAC &nbsp;by &nbsp;ไม่นอน</small>
    </div>
  </footer>
</body>
</html>


