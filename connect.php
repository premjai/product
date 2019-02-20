<?php
	
	ini_set('display_errors', 1);
	error_reporting(~0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "prem";

	$con = mysqli_connect($servername,$username,$password,$db);

	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
		exit();
	}

?>