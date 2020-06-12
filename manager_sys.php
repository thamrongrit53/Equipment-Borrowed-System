<?php
require_once('condb.php');
 require_once('session_manager.php');
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
button{
      width: 350px;
      height: 200px;
    }
    a{
      color:#000000;
    }
  </style>
</head>
<body style="height:1500px; font-family: 'K2D', sans-serif;">
 <?php 
 //navbar
require_once('navbar.php'); 
 ?>

<div class="container" style="margin-top:50px">
  <div class="jumbotron">
    <h1>Equipment Borrowed System(EBS)=>manager</h1>      
  </div>  
  <div class="row" style="margin-top: 20px;">
     <div class="col-md-4">  
          <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">   
      <img src="img/png/inventory.png" style="width: 80px;height: 80px;">
<br>
    บันทึกข้อมูล/จำนวนเครื่องมือ/วัสดุสิ้นเปลือง</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="add_tool_user.php">เพิ่มรายการอุปกรณ์ใหม่/วัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_material_store_user.php">แก้ไขข้อมูลวัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_tool_store_user.php">แก้ไขข้อมูลอุปกรณ์</a>
    </div>
  </div>
    </div> 

    <div class="col-md-4"> 
            <div class="dropdown">
 
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <img src="img/png/test.png" style="width: 80px;height: 80px;">
<br>  ยืม/คืน/เบิกวัสดุ</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="lend_manager.php">ยืม</a>
      <a class="dropdown-item" href="return_manger.php">คืน</a>
      <a class="dropdown-item" href="withdraw_material_manager.php">เบิกวัสดุ</a>
    </div>
  </div>
    </div> 

     <div class="col-md-4"> 
            
 
    <button type="button" class="btn btn-warning ">
       <a  href="repair_tool_manager.php">                
        <img src="img/png/study1.png" style="width: 80px;height: 80px;">
<br>แจ้งอุปกรณ์ชำรุด</a></button>
   
 </div>
 </div>
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4">  
  
    <button type="button" class="btn btn-warning ">
  <a  href="notify_repair_tool_manager.php">                   
     <img src="img/png/company.png" style="width: 80px;height: 80px;">
<br>แจ้งซ่อม</a></button>

    </div> 
     <div class="col-md-4">
            

    <button type="button" class="btn btn-warning " >
     <a href="update_status_repair_tool_manager.php">                
       <img src="img/png/study.png" style="width: 80px;height: 80px;">
<br> ปรับสถานะ</a></button>
 
    </div> 
     <div class="col-md-4">  
        <div class="dropdown">
 
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <img src="img/png/work.png" style="width: 80px;height: 80px;">
<br>   รายงานทั้งหมด</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="report_tool_manager.php">รายการอุปกรณ์/เครื่องมือ</a>
      <a class="dropdown-item" href="report_material_manager.php">รายการวัสดุสิ้นเปลือง</a>
      <a class="dropdown-item" href="report_notify_repair_manager.php">รายการอุปรกรณ์ชำรุด</a>
      <a class="dropdown-item" href="report_lend_tool_manager.php">รายการยืม/คืน</a>
      <a class="dropdown-item" href="report_withdraw_material_manager.php">รายการเบิก</a>
      <a class="dropdown-item" href="report_sell_tool_manager.php">รายการจำหน่ายอุปกรณ์/เครื่องมือ</a>


    </div>
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


