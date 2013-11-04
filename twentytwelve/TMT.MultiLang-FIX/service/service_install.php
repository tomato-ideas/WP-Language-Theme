<?php

/*
 * banner-slide plugin (Service database install)
 *
 */

	function sv_install() {
	
		$sql = "CREATE TABLE ".TMTMULTILANG_DB_TABLE." (
		  `post_title_tmt` text NOT NULL,
		  `post_content_tmt` longtext NOT NULL,
		  `fea2nd_img_tmt` varchar(255) NOT NULL DEFAULT '',
		  )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		
		  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		  dbDelta($sql);
/* 	  	  echo ('success'); */
	  }

  
?>