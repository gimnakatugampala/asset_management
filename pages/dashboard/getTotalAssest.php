<?php
require_once '../../includes/db_config.php';

$query = "SELECT COUNT(*) as total_count FROM tbasset";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

$totalCount = $row['total_count'];

echo json_encode(['totalCount' => $totalCount]);

// Close the database connection
mysqli_close($conn);
?>
