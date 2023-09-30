<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $userId = $_POST['userId'];
        $editcatname = $_POST['editcatname'];
        $editcatdescription = $_POST['editcatdescription'];

        $sql = "UPDATE assetstatus SET name  = '$editcatname', description  = '$editcatdescription' WHERE code = '$userId'";
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
