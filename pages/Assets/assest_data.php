
<?php
require_once '../../includes/db_config.php';


$user_id = $_POST['user_id'];

$sql = "SELECT tbasset.modal,tbasset.name,tbasset.description,tbasset.unitprice,tbasset.purchaseDate,assetstatus.sname,
assetcategory.asscatname,assetsubcategory.subcatname,tbsupplier.supname,tbdepartment.depname,tbsubdepartment.subdepname,tbasset.location,tbasset.remark,tbasset.qrcode
FROM tbemployee INNER JOIN tbasset ON tbasset.assigntoemployeeid = tbemployee.id INNER JOIN tbdepartment ON tbemployee.departmentid = tbdepartment.id INNER JOIN tbdesignation ON tbemployee.designationid = tbdesignation.id INNER JOIN tbsubdepartment ON tbemployee.subdepartmentid = tbsubdepartment.id INNER JOIN tbsupplier ON tbasset.supplierid = tbsupplier.id INNER JOIN assetstatus ON tbasset.assetstatusid = assetstatus.id INNER JOIN assetcategory ON tbasset.categoryId = assetcategory.id INNER JOIN assetsubcategory ON tbasset.subcategoryid = assetsubcategory.id WHERE tbasset.code = '$user_id';"; 
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

