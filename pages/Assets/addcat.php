<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catname = $_POST['catname'];
    $catdescription = $_POST['catdescription'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO assetcategory (code,name,description,createdate,is_deleted) VALUES ('$departmentcode', '$catname', '$catdescription', '$createddate', '0')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
