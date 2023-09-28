<?php
session_start();
require_once '../../includes/db_config.php';


if (isset($_SESSION['user_id'])) {
    header('Location: ../dashboard/');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        echo 'success';
    } else {
        echo 'Authentication failed. Please check your credentials.';
    }
}
?>
