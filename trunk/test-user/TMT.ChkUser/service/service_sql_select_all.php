<?php

/*
 * TMT Members Theme Function (Service database select)
 * sql select all.
 *
 */

require_once('../../../../../wp-config.php');
//require_once('../../../../wp-includes/wp-db.php');

$sql = 'SELECT * FROM '.TMTMEMBERS_DB_TABLE;
    $qr=mysql_query($sql);
    while($rs=mysql_fetch_array($qr)){
	$json_data[]=array(
		"id"=>$rs['ID'],
		"userLogin"=>$rs['user_login']
	);	
}
//echo $sql;
$json= json_encode($json_data);
echo $json;

?>