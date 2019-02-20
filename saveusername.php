<?php

    // session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "premjai";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
   
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Name = $_POST['name'];
    $Status = $_POST['status'];
 
   echo $strSQL = " INSERT INTO `users` (`UserID`, `Username`, `Password`, `Name`, `Status`) 
    VALUES (NULL, '$Username', '$Password', '$Name', '$Status') ";

    $result = $mysqli->query($strSQL);

    if ($result->num_rows >= 0) {
        header("Location:index_.html");
    } else {
        header("Location:register.php");
    }

?>