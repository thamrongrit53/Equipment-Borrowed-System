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
      height: 100px;
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
    <h1>Equipment Borrowed System(EBS)=>admin</h1>      
  </div>  
</div>

<div class="container">
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4"> 
    <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    ให้สิทธิ์การใช้งาน
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="add_user.php">ลงทะเบียนผู้ใช้งาน/ให้สิทธิ์</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4">  
          <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    บันทึกข้อมูล/จำนวนเครื่องมือ/วัสดุสิ้นเปลือง</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4"> 
             <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    อุปกรณ์ชำรุด</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div> 
    </div>  
 </div>
  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4">  
              <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
   ส่งซ่อมเครื่องมือ/อุปกรณ์ </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
    </div> 
     <div class="col-md-4">
             <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    ปรับสถานะเครื่องมือ/อุปกรณ์ที่ซ่อมเสร็จแล้ว</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>  
    </div> 
     <div class="col-md-4">  
              <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    จำหน่ายเครื่องมือ/อุปกรณ์</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
    </div>  
 </div>

<div class="row" style="margin-top: 20px;">
  <div class="col-md-4">
            <div class="dropdown">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    รายงานทั้งหมด</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Link 1</a>
      <a class="dropdown-item" href="#">Link 2</a>
      <a class="dropdown-item" href="#">Link 3</a>
    </div>
  </div>
  </div>
</div>
</div>
 <footer class="py-4 bg-dark text-white-50" style="margin-top:20px;">
    <div class="container text-center">
      <small>Copyright &copy; SBAC &nbsp;by &nbsp;ไม่นอน</small>
    </div>
  </footer>
</body>
</html>


