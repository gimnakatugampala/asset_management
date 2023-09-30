<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $supname = $_POST['supname'];
    $cperson = $_POST['cperson'];
    $supaddress = $_POST['supaddress'];
    $supemail = $_POST['supemail'];
    $supphone = $_POST['supphone'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbsupplier (code,name,email,phone,address,createddate,contactperson,is_deleted) VALUES ('$departmentcode', '$supname', '$supemail', '$supphone', '$supaddress', '$createddate','$cperson','0')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
