<?php
	session_start();
  	include('condb.php');
  	mysqli_set_charset($condb,"utf8");

	 $username =$_POST['username'];
     $user =mysqli_real_escape_string($condb,$username);
     $phonenumber=$_POST['phonenumber'];
     $phone = mysqli_real_escape_string($condb,$phonenumber);

	$strSQL="SELECT * FROM `tb_user` WHERE `name_u`='$username' AND tel='$phonenumber'";
	$objQuery=mysqli_query($condb,$strSQL);
	print_r($objQuery);

	$objResult=mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
 	
	if(!$objResult)
	{
			echo "$user and $phone Incorrect!";
	}
	else
	{
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["status"] = $objResult["status"];
  			setcookie($username, md5($objResult["username"]), time() + (86400 * 30), "/");

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
