<?php
require_once '../../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phoneno = $_POST['phoneno'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $countryid = $_POST['countryid'];
        $code = $_POST['code'];

        $sql = "UPDATE user_login SET password  = '$pws' WHERE userlogincode = '$userId'";
        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>