<?php
/**
 * Functions to use in the 404 page to display content, and other page information.
 */

$dynamic_page_id = get_option( 'rd_dynamic_404_page' );
$dynamic_page = get_page( $dynamic_page_id );

if ( !function_exists( 'rd_dynamic_404_id' ) ):
function rd_dynamic_404_id()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->id;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_id

if ( !function_exists( 'rd_dynamic_404_post_author' ) ):
function rd_dynamic_404_post_author()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_author;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_author

if ( !function_exists( 'rd_dynamic_404_post_date' ) ):
function rd_dynamic_404_post_date()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_date;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_date

if ( !function_exists( 'rd_dynamic_404_post_date_gmt' ) ):
function rd_dynamic_404_post_date_gmt()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_date_gmt;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_date_gmt

if ( !function_exists( 'rd_dynamic_404_post_content' ) ):
function rd_dynamic_404_post_content()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_content;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_content

if ( !function_exists( 'rd_dynamic_404_post_title' ) ):
function rd_dynamic_404_post_title()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_title;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_title

if ( !function_exists( 'rd_dynamic_404_post_excerpt' ) ):
function rd_dynamic_404_post_excerpt()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_excerpt;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_excerpt

if ( !function_exists( 'rd_dynamic_404_post_status' ) ):
function rd_dynamic_404_post_status()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_status;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_status

if ( !function_exists( 'rd_dynamic_404_comment_status' ) ):
function rd_dynamic_404_comment_status()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->comment_status;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_comment_status

if ( !function_exists( 'rd_dynamic_404_ping_status' ) ):
function rd_dynamic_404_ping_status()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->ping_status;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_ping_status

if ( !function_exists( 'rd_dynamic_404_post_password' ) ):
function rd_dynamic_404_post_password()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_password;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_password

if ( !function_exists( 'rd_dynamic_404_post_name' ) ):
function rd_dynamic_404_post_name()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_name;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_name

if ( !function_exists( 'rd_dynamic_404_to_ping' ) ):
function rd_dynamic_404_to_ping()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->to_ping;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_to_ping

if ( !function_exists( 'rd_dynamic_404_pinged' ) ):
function rd_dynamic_404_pinged()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->pinged;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_pinged

if ( !function_exists( 'rd_dynamic_404_post_modified' ) ):
function rd_dynamic_404_post_modified()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_modified;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_modified

if ( !function_exists( 'rd_dynamic_404_post_modified_gmt' ) ):
function rd_dynamic_404_post_modified_gmt()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_modified_gmt;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_modified_gmt

if ( !function_exists( 'rd_dynamic_404_post_content_filtered' ) ):
function rd_dynamic_404_post_content_filtered()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_content_filtered;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_content_filtered

if ( !function_exists( 'rd_dynamic_404_post_parent' ) ):
function rd_dynamic_404_post_parent()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_parent;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_parent

if ( !function_exists( 'rd_dynamic_404_guid' ) ):
function rd_dynamic_404_guid()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->guid;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_guid

if ( !function_exists( 'rd_dynamic_404_menu_order' ) ):
function rd_dynamic_404_menu_order()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->menu_order;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_menu_order

if ( !function_exists( 'rd_dynamic_404_post_type' ) ):
function rd_dynamic_404_post_type()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_type;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_type

if ( !function_exists( 'rd_dynamic_404_post_mime_type' ) ):
function rd_dynamic_404_post_mime_type()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->post_mime_type;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_post_mime_type

if ( !function_exists( 'rd_dynamic_404_comment_count' ) ):
function rd_dynamic_404_comment_count()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->comment_count;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_comment_count

if ( !function_exists( 'rd_dynamic_404_ancestors' ) ):
function rd_dynamic_404_ancestors()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->ancestors;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_ancestors

if ( !function_exists( 'rd_dynamic_404_filters' ) ):
function rd_dynamic_404_filters()
{
	global $dynamic_page_id;
	global $dynamic_page;
	if ( $dynamic_page_id > -1 )
	{
		return $dynamic_page->filters;
	}
	else
	{
		return '';
	}
}
endif; // END FUNCTION rd_dynamic_404_filters

?>