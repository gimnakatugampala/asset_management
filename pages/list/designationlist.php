<?php
require_once '../../includes/db_config.php';

$sql = 'SELECT * FROM tbdesignation where is_deleted = 0';
$result = $conn->query($sql);

$catdata = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $catdata[] = $row;
    }
}
echo json_encode($catdata);

?>
