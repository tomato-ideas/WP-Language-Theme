<?php

/*
 * tmt multilang fix plugin (Service database select)
 *
 */

require_once('../../../../wp-config.php');
//require_once('../../../../wp-includes/wp-db.php');

$idx	=	$_POST['ID'];
//$idx	=	54;

$sql = 'SELECT * FROM '.TMTMULTILANG_DB_TABLE.' WHERE ID = '.$idx.'';
    $qr=mysql_query($sql);
	$rs=mysql_fetch_array($qr);
	$json_data[]=array(
		"id"=>$rs['ID'],
		"postTitleTmt"=>$rs['post_title_tmt'],
		"postContentTmt"=>$rs['post_content_tmt'],
		"fea2ndTmt"=>$rs['fea2nd_img_tmt']
	);	
$json= json_encode($json_data);
echo $json;
//echo $rs;
?>