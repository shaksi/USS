<?php
	$option_fields[] = $logo_img = THEME_PREFIX . "logo_img";
	$option_fields[] = $logo_txt = THEME_PREFIX . "logo_txt";
?>

<div class="postbox">
    <h3>Logo Customization Options</h3>
    
    <div class="inside">
		<p>Use the options below to upload and configure a custom image based logo or keep it simple and use a text based logo instead.</p>
		
		<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		
		<label class="upload">
			<p><input class="file" id="logo_img_upload" type="file" name="<?php echo THEME_PREFIX; ?>logo_img_upload" /></p>
		</label>
		
		<?php if (get_option($logo_img)) { ?>
			<p>
				<label for="<?php echo THEME_PREFIX; ?>delete_logo_img">
					<input class="checkbox" id="<?php echo THEME_PREFIX; ?>delete_logo_img" type="checkbox" name="<?php echo THEME_PREFIX; ?>delete_logo_img" value="true" /> Delete Logo Image...
				</label>
			</p>
			<img class="image-preview" src="<?php echo get_option($logo_img); ?>" alt="Logo Preview" />
		<?php } ?>
		
		<input type="hidden" name="<?php echo $logo_img; ?>" value="<?php echo get_option($logo_img); ?>" />
    	
    	<p>Or use "text" for your logo instead:</p>
    	<p><input class="option-field-medium" id="<?php echo $logo_txt; ?>" type="text" name="<?php echo $logo_txt; ?>" value="<?php echo get_option($logo_txt); ?>" /></p>
    	        
        <p class="submit">
			<input type="submit" class="button" value="Save Changes" />
		</p>
    </div> <!-- inside -->
</div> <!-- postbox -->