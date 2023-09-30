<?php
require_once '../../includes/db_config.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $stmt = $conn->prepare("SELECT tbgenaral_user_profile.usercode, tbgenaral_user_profile.firstname, 
    tbgenaral_user_profile.lastname, tbgenaral_user_profile.phoneno, user_login.email, 
    tbgenaral_user_profile.address, user_login.password FROM user_login INNER JOIN tbgenaral_user_profile 
    ON user_login.genaral_user_profile_id = tbgenaral_user_profile.id WHERE user_login.id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $usercode = $row['usercode'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $phoneno = $row['phoneno'];
        $email = $row['email'];
        $address = $row['address'];
        $password = $row['password'];

        $response = [
            'usercode' => $usercode,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'phoneno' => $phoneno,
            'email' => $email,
            'address' => $address,
            'password' => $password
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