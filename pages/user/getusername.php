<?php
require_once '../../includes/db_config.php';


    $stmt = $conn->prepare("SELECT firstname,lastname FROM tbgenaral_user_profile where createdby=3");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];


        $response = [
            'firstname' => $firstname,
            'lastname' => $lastname
        ];

        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'User not found']);
    }

    $stmt->close();
?>