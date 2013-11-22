<?php

/*
 * TMT Members Theme Function (Service database update)
 * sql update data.
 *
 */
 
require_once('../../../../../wp-config.php');

$idx			=	$_POST['ID'];
$userPhone		=	$_POST['user_phone'];
$userIdCard		=	$_POST['user_id_card'];
$userAddress	=	$_POST['user_address'];
/*
$idx			=	$_POST['ID'];
$userPhone		=	'99121';
$userIdCard		=	'99121';
$userAddress	=	'99121';
*/

$updatesql = 'UPDATE  '.TMTMEMBERS_DB_TABLE.' set wp_users.user_phone = "'.$userPhone.'" ,wp_users.user_id_card = "'.$userIdCard.'" ,wp_users.user_address = "'.$userAddress.'" WHERE wp_users.ID = "'.$idx.'"';


$updated = $wpdb->query($updatesql);

echo "Update Complete !!";

?>