<?php
require_once '../../includes/db_config.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("SELECT name,email,phone,address,contactperson FROM tbsupplier WHERE code = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $supname = $row['supname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $contactperson = $row['contactperson'];

        $response = [
            'supname' => $supname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'contactperson' => $contactperson
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