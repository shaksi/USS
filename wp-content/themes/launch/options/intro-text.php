<?php
	$option_fields[] = $intro_title = THEME_PREFIX . "intro_title";
	$option_fields[] = $intro_text = THEME_PREFIX . "intro_text";
?>

<div class="postbox">
    <h3>Introductory Text Options</h3>
    
    <div class="inside">
    	<p>Enter a short title:</p>
    	<p>
    		<input class="option-field" id="<?php echo $intro_title; ?>" type="text" name="<?php echo $intro_title; ?>" value="<?php echo get_option($intro_title); ?>" />
    	</p>
    	
    	<p>Enter some text describing what your site is about:</p>
    	
    	<p><textarea class="option-area" id="<?php echo $intro_text; ?>" name="<?php echo $intro_text; ?>"><?php echo get_option($intro_text); ?></textarea></p>
    	
    	<p class="submit">
    		<input type="submit" class="button" value="Save Changes" />
    	</p>
    </div> <!-- inside -->
</div> <!-- postbox -->