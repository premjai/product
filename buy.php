<?php
	session_start();
	require_once("connect.php");

	$session_id = session_id();
	
	$id = mysqli_real_escape_string($con,$_POST['product_id']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
	$qty = mysqli_real_escape_string($con,$_POST['txtqty']);

	$total = $price * $qty;
	


	$strSQL = "INSERT INTO `cart` (`id`, `product_id`, `price`, `qty`, `total`, `session_id`) VALUES (NULL, '$id', '$price', '$qty', '$total', '$session_id') ";
	

//	$strSQL = "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'";
	
	$objQuery = mysqli_query($con, $strSQL);

	mysqli_close($con);

	
	header("Location:viewcart.php");
	
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

?>

