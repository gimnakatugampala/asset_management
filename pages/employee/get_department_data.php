<?php
require_once '../../includes/db_config.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("SELECT depname,description FROM tbdepartment WHERE code = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $depname = $row['depname'];
        $description = $row['description'];

        $response = [
            'depname' => $depname,
            'description' => $description,
        ];

        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'User not found']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'Invalid request']);
}

$conn->close();
?>