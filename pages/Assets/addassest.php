<?php
require_once '../../includes/db_config.php';
require_once '../../phpqrcode/qrlib.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aname = $_POST['aname'];
    $modelno = $_POST['modelno'];
    $adescription = $_POST['adescription'];
    $unitprice = $_POST['unitprice'];
    $dateofpurchase = $_POST['dateofpurchase'];
    $asid = $_POST['asid'];
    $catid = $_POST['catid'];
    $scid = $_POST['scid'];
    $supid = $_POST['supid'];
    $depid = $_POST['depid'];
    $sdid = $_POST['sdid'];
    $location = $_POST['location'];
    $remark = $_POST['remark'];


    $createddate = date('Y-m-d');

    $datetime = date("Y-m-d H:i:s");
    $departmentcode = strtotime($datetime);
    
    $qrCodeContent = "$departmentcode|$modelno|$aname|$adescription|$unitprice|$dateofpurchase|$location|$remark";

    // Generate QR code image file
    $qrCodeFileName = uniqid() . '.png'; // Unique filename to avoid overwriting
    QRcode::png($qrCodeContent, '../../qrimage/' . $qrCodeFileName); // Save the QR code image to a folder

    // Save QR code path and other data to the database
    $sql = "INSERT INTO tbasset (code, modal, name, description,unitprice,purchaseDate, location, remark, qrcode, assetstatusid, categoryId,subcategoryid, supplierid, departmentid,subdepartmentid, createddate, assigntoemployeeid, modifydate,is_deleted) VALUES ('$departmentcode', '$modelno', '$aname','$adescription','$unitprice', '$dateofpurchase', '$location', '$remark', '$qrCodeFileName', '$asid', '$catid', '$scid', '$supid', '$depid', '$sdid', '$createddate', '0', '$createddate','0')";

    if ($conn->query($sql) === true) {
        echo 'true';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
}
?>





