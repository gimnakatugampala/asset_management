<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $countryid = $_POST['countryid'];
    $user_id = $_POST['user_id'];

    // Generate random user codes
    $usercode = mt_rand(1, 10000000000);
    $userlogincode = mt_rand(1, 10000000000);

    // Current date
    $createddate = date('Y-m-d');

    // Insert user profile data
    $insert_profile_sql = "INSERT INTO tbgenaral_user_profile (usercode, imagename, imagedata, firstname, lastname, phoneno, createddate, address, createdby, modifieddate, modifieby, country_id) 
                            VALUES ('$usercode', '', '', '$firstname', '$lastname', '$phoneno', '$createddate', '$address', '$user_id', '$createddate', '$user_id', '$countryid')";

    if ($conn->query($insert_profile_sql) === true) {
        $gpid = $conn->insert_id; // Get the ID of the inserted row

        // Insert user login data
        // $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash the password
        $insert_login_sql = "INSERT INTO user_login (email, password, userlogincode, genaral_user_profile_id, is_deleted) 
                             VALUES ('$email', '$password', '$userlogincode', '$gpid', 0)";

        if ($conn->query($insert_login_sql) === true) {
            echo 'success';
        } else {
            echo 'Error: ' . $insert_login_sql . '<br>' . $conn->error;
        }
    } else {
        echo 'Error: ' . $insert_profile_sql . '<br>' . $conn->error;
    }
} else {
    echo 'Invalid request'; // You should handle this case more gracefully
}
?>
