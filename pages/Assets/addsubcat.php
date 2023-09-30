<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $subcatname = $_POST['subcatname'];
    $subcatdescription = $_POST['subcatdescription'];
    $did = $_POST['did'];

    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $subdepartmentcode = strtotime($datetime);
    
    $sql = "INSERT INTO assetsubcategory (code,subcatname,description,createdate,is_deleted,
    assetcategoryid) VALUES ('$subdepartmentcode', '$subcatname', '$subcatdescription', '$createddate', '0','$did')";
    if ($conn->query($sql) === true) {
        echo 'success';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>
