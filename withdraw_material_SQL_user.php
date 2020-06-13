<?php
require_once('condb.php');
require_once('session_user.php');
require('PHPMailer/PHPMailerAutoload.php');
require('PHPMailer/class.phpmailer.php');
mysqli_set_charset($condb,"utf8");

$code=$_POST['code'];
$name_m=$_POST['name_m'];
$unit_d=$_POST['unit_d'];
$unit=$_POST['unit'];
$member=$_POST['member'];
$date_d=$_POST['date_d'];
$unit_t=$_POST['unit_t'];

 if ($unit_t < $unit_d) {
 	header("location:error_process.php");
 } else {
 $as=$unit_t-$unit_d;
 $sql="INSERT INTO `disburse`(`code`,`name_m`,`unit_d`,`d_unit`,`member_d`,`date_d`)VALUES('$code','$name_m','$unit_d','$unit','$member','$date_d')";
 $query=mysqli_query($condb,$sql); 

}
    
 $mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'mail.kidtronik.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$gmail_username = "equipmentborrowedsystem@kidtronik.com"; // gmail ที่ใช้ส่ง
$gmail_password = "P@ch86eR"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1
$sender = "EquipmentBorrowedSystem"; // ชื่อผู้ส่ง
$email_sender = "equipmentborrowedsystem@kidtronik.com"; // เมล์ผู้ส่ง 
$email_receiver = $_SESSION["email"]; // เมล์ผู้รับ ***

$subject = "รายการเบิกวัสดุสิ้นเปลือง"; // หัวข้อเมล์
$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$email_content = "
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>ท่านได้เบิก<br>$name_m</p>
<br>
<p>เบิกวันที่=>$date_d</p>
<br>
<p>จำนวน=>$unit_d..$unit</p>
</body>
</html>";

//  ถ้ามี email ผู้รับ
if($email_receiver){
  $mail->msgHTML($email_content);


  if (!$mail->send()) {  // สั่งให้ส่ง email

    // กรณีส่ง email ไม่สำเร็จ
    echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
    echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
  }else{ 
    // กรณีส่ง email สำเร็จ

 }
  } 

	  if ($query){
		 $upsql="UPDATE `tb_tool` SET `unit`='$as' WHERE code='$code'";
		$queryup=mysqli_query($condb,$upsql);
     	header("location:withdraw_material_user.php");
      			}else{
      	header("location:error_process.php");
      			}

?>
