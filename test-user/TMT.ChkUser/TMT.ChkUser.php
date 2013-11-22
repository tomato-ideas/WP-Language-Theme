<?php
global $wpdb;
/*//////////////////////////////////////
 * theme include file
/*//////////////////////////////////////
require_once('service/service_sql_install.php'); // INSTALL TABLE
require_once('ui/ui_admin-chkuser-login.php'); // UI CONTACT
require_once('ui/ui_admin-menu.php'); // UI ADMIN MENU

/*//////////////////////////////////////
 * theme database version - used to identify the need to "upgrade" database
/*//////////////////////////////////////
define('TMTCHKUSER_DB_VERSION', 1);


/*//////////////////////////////////////
 * theme database version - used to identify the need to "upgrade" database
/*//////////////////////////////////////
define('TMTCHKUSER_DB_TABLE', $wpdb->prefix."users_log");


/*//////////////////////////////////////
 * theme installation
/*//////////////////////////////////////
function tmt_theme_chkuser_activation(){   
	sv_install_chkuser();
}


/*//////////////////////////////////////
 * theme uninstallation
/*//////////////////////////////////////
function tmt_theme_chkuser_deactivation(){

}

/*------------------------------------------- start.PART UI-ADMIN TMT ChkUser -------------------------------------------*/

/*//////////////////////////////////////
 * theme add menu
/*//////////////////////////////////////
function tmt_chkuser_admin_menu(){
	add_menu_page( 
		'custom menu title', 'TMT.ChkUser', 
		'edit_published_posts', 'tmt_chkuser', 
		'custom_tmt_chkuser_page', get_bloginfo('template_url') .'/TMT.ChkUser/images/tmt_chkuser-logo.png', 102 );
}


/*//////////////////////////////////////
 * theme page TMT ChkUser Menu
/*//////////////////////////////////////
function custom_tmt_chkuser_page(){
	ui_admin_chkuser();
}


/*//////////////////////////////////////
 * theme page TMT ChkUser Login
/*//////////////////////////////////////
function tmt_chkuser_login() {
	ui_admin_chkuser_login();
}

/*------------------------------------------- end.PART UI-ADMIN TMT ChkUser -------------------------------------------*/

/*------------------------------------------- start.PART REGISTER & INCLUDE TMT ChkUser -------------------------------------------*/

/*//////////////////////////////////////
 * actions & filter
/*//////////////////////////////////////
add_action('admin_menu', 'tmt_chkuser_admin_menu'); // MENU ADMIN
add_action('admin_head', 'tmt_chkuser_login');
add_action( 'login_enqueue_scripts', 'tmt_chkuser_login' ); // CHK LOGIN


/*//////////////////////////////////////
 * theme check install/uninstall
/*//////////////////////////////////////
tmt_theme_chkuser_activation('desert_default');
tmt_theme_chkuser_deactivation('desert_default');  
  
/*------------------------------------------- end.PART REGISTER & INCLUDE TMT ChkUser -------------------------------------------*/

?>
