<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $commentarea = $_POST['commentarea'];
    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO tbassestcomment (commentcode,comment,is_deleted,commentcreatedate,assest_id) VALUES ('$departmentcode', '$commentarea',0,'$createddate','$user_id')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
