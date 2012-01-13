<?php
	$option_fields[] = $footer_text = THEME_PREFIX . "footer_text";
?>

<div class="postbox">
    <h3>Footer Text Configuration</h3>
    
    <div class="inside">
    	<p>Enter the text you wish to display within the theme footer here:</p>
    	<p>
    		<textarea class="option-area" id="<?php echo $footer_text; ?>" name="<?php echo $footer_text; ?>"><?php echo get_option($footer_text); ?></textarea>
    	</p>
    	
    	<p class="submit">
    		<input type="submit" class="button" value="Save Changes" />
    	</p>
    </div> <!-- inside -->
</div> <!-- postbox -->