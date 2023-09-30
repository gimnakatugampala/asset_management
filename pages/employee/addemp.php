<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $depid = $_POST['depid'];
    $desid = $_POST['desid'];
    $phone = $_POST['phone'];
    $joingdate = $_POST['joingdate'];
    $address = $_POST['address'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $subdepid = $_POST['subdepid'];
    $email = $_POST['email'];
    $leavingdate = $_POST['leavingdate'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbemployee (employeecode, firstname, lastname ,dob, joingdate, leavedate, phone, email, address, designationid, subdepartmentid,departmentid, is_deleted, modifieddate) VALUES ('$departmentcode', '$firstname', '$lastname', '$dob', '$joingdate', '$leavingdate', '$phone', '$email', '$address', '$desid', '$subdepid','$depid', '0', '$createddate')";
    if ($conn->query($sql) === true) {
        echo 'true';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>


