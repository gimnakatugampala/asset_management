<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    echo json_encode(['user_id' => $user_id]);
} else {
    echo json_encode(['user_id' => null]);
}
?>
