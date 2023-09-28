<?php
require_once '../../includes/db_config.php';

$sql = 'SELECT tbgenaral_user_profile.usercode,tbgenaral_user_profile.firstname,tbgenaral_user_profile.lastname,tbgenaral_user_profile.phoneno, user_login.email,tbgenaral_user_profile.createddate FROM user_login INNER JOIN tbgenaral_user_profile ON user_login.genaral_user_profile_id = tbgenaral_user_profile.id where user_login.is_deleted = 0';
$result = $conn->query( $sql );

$cats = array();

if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        $cats[] = $row;
    }
}

echo json_encode( $cats );
?>