<?php

/*
 * tmt multilang fix plugin (Service database select)
 *
 */

require_once('../../../../wp-config.php');
//require_once('../../../../wp-includes/wp-db.php');

$sql = 'SELECT * FROM '.TMTMULTILANG_DB_TABLE;
    $qr=mysql_query($sql);
    while($rs=mysql_fetch_array($qr)){
	$json_data[]=array(
		"id"=>$rs['ID'],
		"postTitleTmt"=>$rs['post_title_tmt'],
		"postContentTmt"=>$rs['post_content_tmt'],
	);	
}
//echo $sql;
$json= json_encode($json_data);
echo $json;

?>