<?php
require_once '../../includes/db_config.php';

header('Content-Type: application/json');

// Validate and sanitize user input
$user_id = $conn->real_escape_string($_POST['user_id']);

$stmt = $conn->prepare("SELECT * FROM tbasset WHERE code = ?");
$stmt->bind_param("s", $user_id);

$data = array();

if ($stmt->execute()) {
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
}

// Return data as JSON response
echo json_encode($data);

$stmt->close();
$conn->close();
?>
