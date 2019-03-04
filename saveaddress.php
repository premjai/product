<?php

    // session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "prem";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
   
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
 
   echo $strSQL = " INSERT INTO `address` (`id`, `address`, `city`, `state`, `zip`) 
    VALUES (NULL, '$address', '$city', '$state', '$zip') ";

    $result = $mysqli->query($strSQL);

    if ($result->num_rows >= 0) {
        header("Location:viewcart.php");
    } else {
        header("Location:address.php");
    }

?>