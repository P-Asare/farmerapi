<?php
    include("connection.php");
    header('Content-Type: application/json');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['show']) && $_GET['show'] == 'true'){

            $sql = "SELECT * FROM crops";
            $result = mysqli_query($conn, $sql);
        
            if ($result) {
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                echo json_encode($rows);
                exit;
            } else {
                echo json_encode(array('error' => 'Failed to fetch data from database'));
                exit;
            }
        }
    }

    http_response_code(405);


?>