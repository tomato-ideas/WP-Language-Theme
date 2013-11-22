<?php

/*
 * banner-slide plugin (Service database insert)
 *
 */

require_once('../../../../../wp-config.php');

$usr_id		= $_POST['user_id'];
$usr_status	= $_POST['user_status'];


$wpdb->insert('wp_users_log',array(	'user_id' => $usr_id, 'user_status'=> $usr_status), array('%d','%s') );
// $wpdb->insert( $table, $data, $format );
// Format values: %s as string; %d as integer (whole number); and %f as float. (See below for more information.)
$retval = mysql_query( $wpdb );


if(!$retval )
{
  die('Could not enter data: ' . mysql_error());
}


?>

