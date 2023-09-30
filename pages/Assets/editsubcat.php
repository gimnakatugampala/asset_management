<?php
require_once '../../includes/db_config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $editsubcatname = $_POST['editsubcatname'];
        $did = $_POST['did'];
        $userId = $_POST['userId'];

        $sql = "UPDATE assetsubcategory SET subcatname  = '$editsubcatname', assetcategoryid ='$did' WHERE code = '$userId'";
        if ($conn->query($sql) === true) {
            echo 'success';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo 'Invalid request method.';
}
?>