<?php
require_once '../../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_POST["user_id"];

    $sql = "SELECT * FROM tbasset WHERE code = '$user_id'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Return data as JSON response
    echo json_encode($data);

    $conn->close();
}
?>