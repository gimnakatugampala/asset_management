<?php
require_once '../../../includes/db_config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $editsubdepname = $_POST['editsubdepname'];
        $editsubdepdescription = $_POST['editsubdepdescription'];
        $did = $_POST['did'];
        $userId = $_POST['userId'];

        $sql = "UPDATE tbsubdepartment SET subdepname  = '$editsubdepname',description  = '$editsubdepdescription',departmentid ='$did' WHERE code = '$userId'";
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