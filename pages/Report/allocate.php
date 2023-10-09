<?php
require_once '../../includes/db_config.php';

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

// Fetch data from the database based on the date range
$sql = "SELECT * FROM assetstatus WHERE createdate BETWEEN '$start_date' AND '$end_date'";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
