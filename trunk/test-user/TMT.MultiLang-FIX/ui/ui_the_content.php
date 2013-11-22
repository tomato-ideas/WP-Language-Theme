<?php

/*
 * TMT MultiLang Theme Function (2nd Content multilang for theme)
 * 2nd content page post multilang.
 *
 */
 
function ui_the_content($id){
	global $wpdb;
	$mylink = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE  ID = $id ");
	foreach($mylink as $row){ 
		echo $row->post_content_tmt;
	}
}
?>