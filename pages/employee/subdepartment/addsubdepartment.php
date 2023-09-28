<?php
require_once '../../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subdepname = $_POST['subdepname'];
    $subdepdescription = $_POST['subdepdescription'];
    $did = $_POST['did'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $subdepartmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbsubdepartment (code,subdepname,description,createdate,is_deleted,
    departmentid) VALUES ('$subdepartmentcode', '$subdepname', '$subdepdescription', '$createddate', '0','$did')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
