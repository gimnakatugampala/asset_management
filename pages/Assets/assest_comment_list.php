<?php
require_once '../../includes/db_config.php';

$user_id = $_POST['user_id'];

$sql = "SELECT * FROM tbasset INNER JOIN tbassestcomment ON tbassestcomment.assest_id = tbasset.code where tbassestcomment.assest_id = '$user_id' and tbassestcomment.is_deleted = 0;"; 
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return data as JSON response
echo json_encode($data);

$conn->close();
?>

