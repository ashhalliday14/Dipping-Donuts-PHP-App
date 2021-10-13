<?php
    $servername = "localhost";
    $username = "ahalliday";
    $password = "Password12";
    $db = "ahalliday_FurtherWeb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    // Check connection
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>