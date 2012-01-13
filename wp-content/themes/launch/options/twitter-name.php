<?php
	$option_fields[] = $twitter_name = THEME_PREFIX . "twitter_name";
?>

<div class="postbox">
    <h3>Twitter.com Options</h3>
    
    <div class="inside">
    	<p>Enter your Twitter.com username below:</p>
    	<p>
    		<input class="option-field" id="<?php echo $twitter_name; ?>" type="text" name="<?php echo $twitter_name; ?>" value="<?php echo get_option($twitter_name); ?>" />
    	</p>
    	    	
    	<p class="submit">
    		<input type="submit" class="button" value="Save Changes" />
    	</p>
    </div> <!-- inside -->
</div> <!-- postbox -->