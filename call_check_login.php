<?php
	session_start();
  	require_once('condb.php');
  	mysqli_set_charset($condb,"utf8");

	 $username =$_POST['username'];
     $user =mysqli_real_escape_string($condb,$username);
     $phonenumber=$_POST['phonenumber'];
     $phone = mysqli_real_escape_string($condb,$phonenumber);

	$strSQL="SELECT * FROM `tb_user` WHERE `name_u`='$user' AND tel='$phone'";
	$objQuery=mysqli_query($condb,$strSQL);
	print_r($objQuery);

	$objResult=mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
 	
	if(!$objResult)
	{
			echo "$user and $phone Incorrect!";
	}
	else
	{
			$_SESSION["name_u"] = $objResult["name_u"];
			$_SESSION["status"] = $objResult["status"];
  			setcookie($username, md5($objResult["name_u"]), time() + (86400 * 30), "/");

			if($objResult["status"] == "ADMIN")
			{
				
				header("location:admin_sys.php");
			}
			else if ($objResult["status"] == "USER")
			{
				header("location:member_sys.php");
			}else if($objResult["status"] == "MANAGER")
			{
				header("location:manager_sys.php");
			};
	};
	mysqli_close($condb);
?>
