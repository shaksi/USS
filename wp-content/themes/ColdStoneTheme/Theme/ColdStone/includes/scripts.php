<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/visionary.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/superfish.js"></script>
<script type="text/javascript">
	jQuery(function(){
		jQuery('ul.superfish').superfish();
					
		var tabContainers = $('div.tabs > div');
    
		jQuery('div.tabs ul.tabNavigation a').click(function () {
			tabContainers.hide().filter(this.hash).show();
			
			jQuery('div.tabs ul.tabNavigation a').removeClass('selected');
			jQuery(this).addClass('selected');
			
			return false;
		}).filter(':first').click();	
		
		<?php if (get_option('coldstone_disable_toptier') == 'on') echo('jQuery("ul.nav > li > a > span.sf-sub-indicator").parent().attr("href","#");'); ?>
	});
</script>