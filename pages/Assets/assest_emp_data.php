
<?php
require_once '../../includes/db_config.php';

$user_id = $_POST['user_id'];

$sql = "SELECT 
tbemployee.employeecode, 
tbdesignation.desname,
tbemployee.firstname,
tbemployee.lastname,
tbemployee.joingdate,
tbemployee.leavedate,
tbemployee.phone,
tbemployee.email,
tbemployee.address,
tbemployee.modifieddate,
tbemployee.dob,
tbdepartment.depname,
tbsubdepartment.subdepname
FROM 
tbemployee
INNER JOIN 
tbdesignation ON tbemployee.designationid = tbdesignation.id 
INNER JOIN 
tbdepartment ON tbemployee.departmentid = tbdepartment.id 
INNER JOIN 
tbsubdepartment ON tbemployee.subdepartmentid = tbsubdepartment.id 
WHERE 
tbemployee.employeecode = $user_id"; 
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

