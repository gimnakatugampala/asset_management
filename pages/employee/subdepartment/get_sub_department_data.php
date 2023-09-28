<?php
require_once '../../../includes/db_config.php';


if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("SELECT subdepname,description,departmentid FROM tbsubdepartment WHERE code = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $subdepname = $row['subdepname'];
        $description = $row['description'];
        $departmentid = $row['departmentid'];

        $response = [
            'subdepname' => $subdepname,
            'description' => $description,
            'departmentid' => $departmentid,
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