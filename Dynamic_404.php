<?php
/*
Plugin Name: Dynamic 404 Page
Plugin URI:
Description: Allows you to set a page as the content of your 404 page.
Version: 1.0
Author: Paul Reitz
Author URI: http://reitzdesigns.com
*/

//import supporting files.
include_once( 'php/dynamic_404_theme_function.php' );


/********************************************************************************************/

/*********************
 * Add settings page. *
 *********************/
 
if ( !function_exists( 'rd_dynamic_admin_page' ) ):
function rd_dynamic_admin_page()
{
	include( 'php/dynamic_404_admin.php' );
}
endif; // END FUNCTION rd_dynamic_admin_page

if ( !function_exists( 'rd_dynamic_admin_action' ) ):
function rd_dynamic_admin_action()
{
	add_options_page( 'Set 404 Page', 'Set 404 Page', 9, basename( __FILE__ ), 'rd_dynamic_admin_page' );
}
endif; // END FUNCTION rd_dynamic_admin_action
add_action( 'admin_menu', 'rd_dynamic_admin_action' );

/********************************************************************************************/

/************************
* Database Management. *
*************************/

/**
 * Add the default value to the database.
 */
if ( !function_exists( 'rd_dynamic_set_option' ) ):
function rd_dynamic_set_option()
{
	update_option( 'rd_dynamic_404_page', -1 );
}
endif; // END FUNCTION rd_dynamic_set_option
register_activation_hook( __FILE__, 'rd_dynamic_set_option' );

/**
 * Clear the option from the database when the plugin is deactivated.
 */
if ( !function_exists( 'rd_dynamic_clear_option' ) ):
function rd_dynamic_clear_option()
{
	delete_option( 'rd_dynamic_404_page' );
}
endif; // END FUNCTION rd_dynamic_clear_option
register_deactivation_hook( __FILE__, 'rd_dynamic_clear_option' );

?>