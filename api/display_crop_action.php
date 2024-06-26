<?php
    
include("connection.php");
header('Content-Type: application/json');

// GET request
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    if(isset($data['crop_id'])){
        $crop_id = $data['crop_id'];

        $sql = "SELECT c.crop_name, q.quantity, q.planting_date, q.harvesting_date 
        FROM crops AS c 
        INNER JOIN crop_quantities AS q ON c.crop_id = q.crop_id 
        WHERE c.crop_id = ?";
        
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $crop_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $crop = mysqli_fetch_all($result, MYSQLI_ASSOC);

        echo json_encode($crop);
        exit;
    }
} else {
    http_response_code(405);
}

?>