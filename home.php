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
  </style>
</head>
<body style="height:1500px; font-family: 'K2D', sans-serif;">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Equipment Borrowed System(EBS)</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
</nav>


<div class="container" style="margin-top:50px">
  <div class="jumbotron">
    <h1>Equipment Borrowed System(EBS)</h1>      
  </div>  
  <div class="row"> 
  	<div class="col-md-4"></div>
  	<div class="col-md-4">
  		<form action="call_check_login.php" method="POST">
  			<h3>เข้าใช้งาน</h3>	
  			<label>ผู้ใช้งาน</label>
  			<input type="text" name="username" class="form-control">
  			<label>เบอร์โทรศัพท์</label><br>
  			<input type="text" name="phonenumber" class="form-control">
  			<button class="btn btn-primary" type="submit" style="margin-top: 20px;">เข้าสู่ระบบ</button>
  		</form>
  	</div>
  	<div class="col-md-4"></div>
  </div>
</div>
 <footer  class="py-4 bg-dark text-white-50" style="margin-top: 20px;">
    <div class="container text-center">
      <small>Copyright &copy; SBAC &nbsp;by &nbsp;ไม่นอน</small>
    </div>
  </footer>
</body>
</html

