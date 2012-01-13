<?php
	$option_fields[] = $mc_api = THEME_PREFIX . "mc_api";
	$option_fields[] = $mc_list_id = THEME_PREFIX . "mc_list_id";
?>

<div class="postbox">
    <h3>MailChimp Integration Options</h3>
    
    <div class="inside">
		<p>Your MailChimp API Key:</p>
		<p><input class="option-field-medium" id="<?php echo $mc_api; ?>" type="text" name="<?php echo $mc_api; ?>" value="<?php echo get_option($mc_api); ?>" /></p>
    	
    	<p>List ID:</p>
    	<p><input class="option-field-small" id="<?php echo $mc_list_id; ?>" type="text" name="<?php echo $mc_list_id; ?>" value="<?php echo get_option($mc_list_id); ?>" /></p>
    	        
        <p class="submit">
			<input type="submit" class="button" value="Save Changes" />
		</p>
    </div> <!-- inside -->
</div> <!-- postbox -->