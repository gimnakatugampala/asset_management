<?php
require_once '../../../includes/db_config.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $userId = $_POST["userId"];

        $sql = "UPDATE tbsubdepartment SET is_deleted  = '1' WHERE code = '$userId'";
        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>