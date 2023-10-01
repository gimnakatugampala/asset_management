<?php
require_once '../../includes/db_config.php';

$queryTable1 = "SELECT COUNT(*) as total_count FROM tbasset";
$queryTable2 = "SELECT COUNT(*) as total_count FROM tbemployee";
$queryTable3 = "SELECT COUNT(*) as total_count FROM tbdepartment";
$queryTable4 = "SELECT COUNT(*) as total_count FROM tbsupplier";

// Execute queries
$resultTable1 = mysqli_query($conn, $queryTable1);
$resultTable2 = mysqli_query($conn, $queryTable2);
$resultTable3 = mysqli_query($conn, $queryTable3);
$resultTable4 = mysqli_query($conn, $queryTable4);

// Fetch counts
$rowTable1 = mysqli_fetch_assoc($resultTable1);
$rowTable2 = mysqli_fetch_assoc($resultTable2);
$rowTable3 = mysqli_fetch_assoc($resultTable3);
$rowTable4 = mysqli_fetch_assoc($resultTable4);

// Get counts
$totalCountTable1 = $rowTable1['total_count'];
$totalCountTable2 = $rowTable2['total_count'];
$totalCountTable3 = $rowTable3['total_count'];
$totalCountTable4 = $rowTable4['total_count'];

// Return counts as JSON
echo json_encode([
    'totalCountTable1' => $totalCountTable1,
    'totalCountTable2' => $totalCountTable2,
    'totalCountTable3' => $totalCountTable3,
    'totalCountTable4' => $totalCountTable4
]);

mysqli_close($conn);
?>
