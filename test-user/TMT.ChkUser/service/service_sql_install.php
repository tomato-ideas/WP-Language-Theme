<?php

/*
 * TMT Members Theme Function (service install)
 * install sql feilds.
 *
 */

	function sv_install_chkuser() {
	
		$sql = "CREATE TABLE ".TMTCHKUSER_DB_TABLE." (
		  `ID` int(11) NOT NULL AUTO_INCREMENT,
		  `user_id` int(11) NOT NULL,
		  `user_status` varchar(100) NOT NULL,
		  `user_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  PRIMARY KEY (`ID`)
		  )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		
		  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		  dbDelta($sql);
/* 	  	  echo ('success'); */
	  }

  
?>