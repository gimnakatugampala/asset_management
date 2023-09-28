<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $depname = $_POST['depname'];
    $depdescription = $_POST['depdescription'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbdepartment (code,name,description,createdate,is_deleted) VALUES ('$departmentcode', '$depname', '$depdescription', '$createddate', '0')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
