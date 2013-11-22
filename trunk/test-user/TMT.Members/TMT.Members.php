<?php
global $wpdb;
/*//////////////////////////////////////
 * theme include file
/*//////////////////////////////////////
require_once('service/service_sql_install.php'); // INSTALL TABLE
require_once('ui/ui_admin-contact-methods.php'); // UI CONTACT
require_once('ui/ui_admin-menu.php'); // UI ADMIN MENU

/*//////////////////////////////////////
 * theme database version - used to identify the need to "upgrade" database
/*//////////////////////////////////////
define('TMTMEMBERS_DB_VERSION', 1);


/*//////////////////////////////////////
 * theme database version - used to identify the need to "upgrade" database
/*//////////////////////////////////////
define('TMTMEMBERS_DB_TABLE', $wpdb->prefix."users");


/*//////////////////////////////////////
 * theme installation
/*//////////////////////////////////////
function tmt_theme_members_activation(){
    sv_install_members();
}


/*//////////////////////////////////////
 * theme uninstallation
/*//////////////////////////////////////
function tmt_theme_members_deactivation(){

}

/*------------------------------------------- start.PART UI-ADMIN TMT Members -------------------------------------------*/

/*//////////////////////////////////////
 * theme add menu
/*//////////////////////////////////////
function tmt_members_admin_menu(){
	add_menu_page( 
		'custom menu title', 'TMT.Members', 
		'edit_published_posts', 'tmt_members', 
		'custom_tmt_members_page', get_bloginfo('template_url') .'/TMT.Members/images/tmt_members-logo.png', 101 );
}


/*//////////////////////////////////////
 * theme page TMT Members Menu
/*//////////////////////////////////////
function custom_tmt_members_page(){
	ui_admin_members();
}


/*//////////////////////////////////////
 * theme page TMT Members Medthods
/*//////////////////////////////////////
function modify_contact_methods($profile_fields) {
	ui_admin_contact_methods();
	return $profile_fields;
	// Add a default avatar to Settings > Discussion
}

if ( !function_exists('df_addgravatar') ) {
	function df_addgravatar( $avatar_defaults ) {
		$myavatar = get_bloginfo('template_directory') . '/TMT.Members/images/ecq.png';
		$avatar_defaults[$myavatar] = 'ECq Default';
		return $avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'df_addgravatar' );
}

/*------------------------------------------- end.PART UI-ADMIN TMT Members -------------------------------------------*/

/*------------------------------------------- start.PART REGISTER & INCLUDE TMT Members -------------------------------------------*/

/*//////////////////////////////////////
 * actions & filter
/*//////////////////////////////////////
add_action('admin_menu', 'tmt_members_admin_menu'); // MENU ADMIN
add_filter('user_contactmethods', 'modify_contact_methods'); // ADD PROFILE FIELD


/*//////////////////////////////////////
 * theme check install/uninstall
/*//////////////////////////////////////
tmt_theme_members_activation('desert_default');
tmt_theme_members_deactivation('desert_default');  
  
/*------------------------------------------- end.PART REGISTER & INCLUDE TMT Members -------------------------------------------*/

?>
