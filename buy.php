<?php
	session_start();
	require_once("connect.php");
	
	$id = mysqli_real_escape_string($con,$_POST['product_id']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $qty = mysqli_real_escape_string($con,$_POST['txtqty']);

	$strSQL = "INSERT INTO `cart` (`id`, `product_id`, `price`, `qty`) VALUES (NULL, '$id', '$price', '$qty') ";

//	$strSQL = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";
	$objQuery = mysqli_query($con, $strSQL);
	// $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

	// if(!$objResult)
	// {
	// 	echo "username and password Incorrect!";
	// 	exit();
	// }
	// else
	// {
	// 	$_SESSION['passlogin'] = "y";
	// 	header("Location:index_.php");

		// 	//*** Session
		// 	$_SESSION["UserID"] = $objResult["UserID"];
		// 	session_write_close();

		// 	//*** Go to Main page
		// 	header("location:index_.php");
		// }
			
//	}
	mysqli_close($con);
?>

