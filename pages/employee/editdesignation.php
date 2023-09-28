<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $userId = $_POST['userId'];
        $editdesname = $_POST['editdesname'];
        $editdesdiscription = $_POST['editdesdiscription'];

        $sql = "UPDATE tbdesignation SET name  = '$editdesname',description  = '$editdesdiscription' WHERE code = '$userId'";
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
