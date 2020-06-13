<?php
require_once('condb.php');
require_once('session_user.php');
require('PHPMailer/PHPMailerAutoload.php');
require('PHPMailer/class.phpmailer.php');
mysqli_set_charset($condb,"utf8");


$name_l=$_POST['name_l'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$code=$_POST['code'];
$name_t=$_POST['name_t'];
$unit_l=$_POST['unit'];

$date_l=$_POST['date_l'];
$date_s=$_POST['date_s'];
$status_l="ยืม";

 $sql="INSERT INTO `lend`( `code`, `name_t`, `email`, `tel`, `unit_l`, `name_l`, `date_l`, `date_s`, `status_l`) VALUES ('$code','$name_t','$email','$tel','$unit_l','$name_l','$date_l','$date_s','$status_l')";
$mail = new PHPMailer();

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

$subject = "ยืมอุปกรณ์"; // หัวข้อเมล์
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
<p>ท่านได้ยืม<br>$name_t</p>
<br>
<p>ยืมวันที่=>$date_l</p>
<br>
<p>กำหนดคืนวันที่วันที่=>$date_s</p>
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

   $query=mysqli_query($condb,$sql);   
	if ($query){
     header("location:lend_user.php");
      			}else{
     header("location:error_process.php");
      			}
     
?>
