<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $userId = $_POST['userId'];
        $editname = $_POST['editname'];
        $editdescription = $_POST['editdescription'];

        $sql = "UPDATE assetstatus SET name  = '$editname', description  = '$editdescription' WHERE code = '$userId'";
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
