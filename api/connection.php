<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "farm_database";

    $conn = mysqli_connect($servername, $username, $password, $database,3306);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_errno);
    }
?>