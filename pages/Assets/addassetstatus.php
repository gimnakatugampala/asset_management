<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO assetstatus (code,sname,description,createdate,is_deleted) VALUES ('$departmentcode', '$name', '$description', '$createddate', '0')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
