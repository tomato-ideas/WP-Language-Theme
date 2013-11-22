<?php

/*
 * TMT MultiLang Theme Function (Detail menu multilang for theme)
 * Page new menu admin.
 *
 */

function ui_admin_chkuser_login(){

 if(function_exists('wplb_login')) {
 	wplb_login();
 }
 global $current_user;
 #Get current user details
 	get_currentuserinfo();
 #Check user login status      
 	if (is_user_logged_in() ) {	

 		?><input type="hidden" id="chkuser" class="login" value="<?php echo ucwords($current_user->ID); ?>"></input><?php
 		
	}else{
		?><input type="hidden" id="chkuser" class="login" value="<?php echo ucwords($current_user->ID); ?>"></input><?php
	}
	
	$url_chkusr = get_bloginfo('template_url');
?>
	<script src="<?php echo $url ?>/TMT.ChkUser/js/jquery-2.0.3.js"></script>
	<script type="text/javascript">
		var url_select_all_chkusr = '<?php echo $url_chkusr ?>/TMT.ChkUser/service/service_sql_select_all.php';
		var url_insert_chkusr = '<?php echo $url_chkusr ?>/TMT.ChkUser/service/service_sql_insert.php';
	</script>
	<script src="<?php echo $url ?>/TMT.ChkUser/js/ui_admin-chkuser-login.js"></script>
	
<?php
}
?>
