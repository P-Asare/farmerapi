<?php

    $servername = "localhost";
    $username = "root";
    $password = getenv("MYSQLPASS");
    $database = "farm_database";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_errno);
    }

    // GET request
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['crop_id'])){
            $crop_id = $_GET['crop_id'];

            $sql = "SELECT * FROM crops WHERE crop_id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $crop_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            $crop = mysqli_fetch_all($result, MYSQLI_ASSOC);
            echo json_encode($crop);
        }
    }

    // POST request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_GET['crop_id'])){
            
            $data = json_decode(file_get_contents("php://input"), true);

            $sql = "INSERT INTO crops (crop_name) VALUES ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $data['crop_name']);
            mysqli_execute_query($conn, $stmt);
        }
    }
?>