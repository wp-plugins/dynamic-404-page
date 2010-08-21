<?php
/**
 *Sets the setting page for the dynamic 404 plugin.
 */
 
 /********************************************************************************************/

/**
 *Save settings if the form was previously submitted, and set the variable used in the form.
 */
if ( $_POST['rd_dynamic_hidden'] == 'Y' )
{
	if ( function_exists( 'check_admin_referer' ) )
		check_admin_referer( 'rddynamic404-editsettings' );
	
	$dynamic_page = (int)$_POST['rd_dynamic_page_id'];
	
	update_option( 'rd_dynamic_404_page', $dynamic_page );
	?>
    	<div class="updated"><p><strong><?php _e( 'Set 404 Page' ); ?></strong></p></div>
    <?php
}
else
{
	$dynamic_page = get_option( 'rd_dynamic_404_page' );
}

/********************************************************************************************/

/**
 * Retreives the page title from a given ID.
 *
 * @param	$page_id		The id of the page to retreive the page title for.
 * @return	string			The title of the page for the given id.
 */
if ( !function_exists( 'rd_dynamic_get_page_title' ) ):
function rd_dynamic_get_page_title( $page_id )
{
	$page_data = get_page( $page_id );
	$page_title = $page_data->post_title;
	
	return $page_title;
}
endif; // END FUNCTION rd_dynamci_get_page_title.

/********************************************************************************************/
/**
 * The form for  setting which page to use as the 404 page.
 */
?>
<div class="wrap">
	<?php echo '<h2>'.__( 'Set 404 Page' ).'</h2>'; ?>
    <p><?php _e( 'Select the page from the drop down box below that you wish to set as the contents of the 404 page, or "No Page". In order for the content to be displayed you will need to edit "404.php" in your active theme. For more information click on "Visit Plugin Page" in the "Dynamic 404 Page" entry under "Plugins".' ); ?></p>
    <form name="rd_dynamic_page_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>" >
    	<input type="hidden" name="rd_dynamic_hidden" value="Y" />
        <?php
			if ( function_exists( 'wp_nonce_field' ) )
				wp_nonce_field( 'rddynamic404-editsettings' );
		?>
    	<label for="rd_dynamic_page_id"><?php _e( 'Select Page: ' ); ?></label>
        <select id="rd_dynamic_page_id" name="rd_dynamic_page_id">
        	<option value="-1" <?php if ( $dynamic_page == -1 ) { echo 'selected'; } ?>><?php _e( 'No Page' ); ?></option>
            <?php
				$all_page_ids = get_all_page_ids();
				foreach ($all_page_ids as $single_page_id)
				{
					$single_page_title = rd_dynamic_get_page_title( $single_page_id );
					echo '<option value="'.$single_page_id.'"';
					if ( $dynamic_page == $single_page_id ) echo 'selected';
					echo '>'.$single_page_title.'</option>';
				}
			?>
        </select>
        <p class="submit">
        	<input type="submit" value="<?php _e( 'Set 404 Page' ); ?>" />
        </p>
    </form>
    <hr />
    <div style="height:35px; background-color:#FDFFBE; border:1px solid #000; padding-left:5px;">
    	<div style="float:left; padding-top:5px;">
    	If you find this simple utility useful, please consider buying me a latte :)
        </div>
        <div style="float:left;">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JKXFWDX7F9MYC">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
		</div>
    </div>
</div>