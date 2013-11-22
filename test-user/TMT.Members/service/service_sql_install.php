<?php

/*
 * TMT Members Theme Function (service install)
 * install sql feilds.
 *
 */

	function sv_install_members() {
	
		$sql = "CREATE TABLE ".TMTMEMBERS_DB_TABLE." (
		  `user_phone` varchar(255) NULL,
		  `user_id_card` varchar(255) NULL,
		  `user_address` varchar(255) NULL
		  )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		
		  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		  dbDelta($sql);
/* 	  	  echo ('success'); */
	  }

  
?>