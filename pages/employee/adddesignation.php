<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $desname = $_POST['desname'];
    $desdiscription = $_POST['desdiscription'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbdesignation (code,name,createddate,is_deleted,description) VALUES ('$departmentcode', '$desname', '$createddate', '0','$desdiscription')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
