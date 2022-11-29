<?php 

    $servername = "127.0.0.1";
    $username = "kalmanft_soumik";
    $password = "112233";
    $db="kalmanft_dailydata";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        return false;
    } 
    // echo "Connected successfully";
    return true;
?>