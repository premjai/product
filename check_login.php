<?php
	session_start();

	require_once("connect.php");
	
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

	$strSQL = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";
	$objQuery = mysqli_query($con, $strSQL);
	$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

	if(!$objResult)
	{
		echo "username and password Incorrect!";
		exit();
	}
	else
	{
		$_SESSION['passlogin'] = "y";
		header("Location:index_.php");



		// if($objResult["LoginStatus"] == "1")
		// {
		// 	echo "'".$username."' Exists login!";
		// 	exit();
		// }
		// else
		// {
		// 	//*** Update Status Login
		// 	$sql = "UPDATE users SET LoginStatus = '1' , LastUpdate = NOW() WHERE UserID = '".$objResult["UserID"]."' ";
		// 	$query = mysqli_query($con,$sql);

		// 	//*** Session
		// 	$_SESSION["UserID"] = $objResult["UserID"];
		// 	session_write_close();

		// 	//*** Go to Main page
		// 	header("location:index_.php");
		// }
			
	}
	mysqli_close($con);
?>