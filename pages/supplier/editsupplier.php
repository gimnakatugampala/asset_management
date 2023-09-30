<?php
require_once '../../includes/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $editsupname = $_POST['editsupname'];
        $editcperson = $_POST['editcperson'];
        $editsupaddress = $_POST['editsupaddress'];
        $editsupemail = $_POST['editsupemail'];
        $editsupphone = $_POST['editsupphone'];
        $userId = $_POST['userId'];

        $sql = "UPDATE tbsupplier SET name  = '$editsupname',email  = '$editsupemail', phone  = '$editsupphone', address  = '$editsupaddress',contactperson  = '$editcperson' WHERE code = '$userId'";
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
