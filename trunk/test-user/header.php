<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
  foreach ($_SESSION as $key=>$val)
    //echo "KEY : ".$key."  VAL : ".$val."<br>";
 
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<!-- //////////// -->
	<div id="testlang" style="position: absolute;z-index: 999;">
	<script src="<?php echo get_bloginfo('template_url') ?>/TMT.MultiLang-FIX/js/jquery-2.0.3.js"></script>

<?php 
	$chkpermalink = get_option('permalink_structure');
	
	if($chkpermalink){
		?>
		<ul style="display:block;">
			<li style="display: inline-table;cursor:pointer;" onclick="location.href='<?php echo post_permalink(); ?>?lang=TH';" class="TH" id="TH">TH</li>
			<li style="display: inline-table;cursor:pointer;" onclick="location.href='<?php echo post_permalink(); ?>?lang=EN';" class="EN" id="EN">EN</li>
		</ul>
		<?php
	}else{
		?>
		<ul style="display:block;">
			<li style="display: inline-table;cursor:pointer;" onclick="location.href='<?php echo post_permalink(); ?>&lang=TH';" class="TH" id="TH">TH</li>
			<li style="display: inline-table;cursor:pointer;" onclick="location.href='<?php echo post_permalink(); ?>&lang=EN';" class="EN" id="EN">EN</li>
		</ul>
		<?php
	}
?>
		
	</div>
<!-- //////////// -->
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<!-- <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?> -->
<!-- //////////// -->
					<?php 
				if(isset($_SESSION['lang'])){
					if( $_SESSION['lang']=="TH" ){
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );
					}else if( $_SESSION['lang']=="EN" ){
					$idx = get_the_ID();
						wp_nav_menu_tmt( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );
					}
				} else {
					//echo "Session no value";
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) );
				}
			?>
<!-- //////////// -->			
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main">
