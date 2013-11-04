<?php

/*
 * banner-slide plugin (menu page for plugin)
 *
 */

function ui_admin(){

$wp_customize->add_section( 'mytheme_new_section_name' , array(
    'title'      => __('Visible Section Name','mytheme'),
    'priority'   => 30,
) );

}	
?>