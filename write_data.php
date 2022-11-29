<?php
    // Prepare variables for database connection
    $dbusername = "localhost";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "";  // enter database password, I used "arduinotest" in step 2.2
    $server = "127.0.0.1"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"
    $My_db = "dailydata";
    // Connect to your database
    $dbconnect = mysql_pconnect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("dailydata",$dbconnect);
    // Prepare the SQL statement
    $sql = "INSERT INTO daily_data (Route, ACC) VALUES ('".$_GET["data1"]."','".$_GET["data2"]."')";    
    // Execute SQL statement
    mysql_query($sql);
?>