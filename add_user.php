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
  	<div class="col-md-3">
  		<h3>ลงทะเบียนผู้ใช้งาน</h3>
  		 <form action="add_user_SQL.php" method="POST">
    <label>ชื่อ-นามสกุล</label>
     <input type="text" name="name" class="form-control">
     <label>ตำแหน่งงาน </label>
     <input type="text" name="position" class="form-control">
      <label>อีเมล </label>
     <input type="text" name="email" class="form-control">
      <label>เบอร์โทร </label>
     <input type="text" name="tel" class="form-control">
     <label>สถานะ</label>
		<select class="form-control" name="status">
                <option>ADMIN</option>
                <option>MANAGER</option>
                <option>USER</option>
              </select>
     <br>
     <button class="btn btn-success" type="submit" value="submit">บันทึก</button>

    </form>
  	</div>
   <div class="col-md-9">
   	<h3>รายงานข้อมูลผู้ให้บริการทั้งหมด</h3>
	<div id="result"></div>
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
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


