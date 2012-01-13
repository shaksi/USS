<?php global $shortname; ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/Goudy_Bookletter_1911_400.font.js" type="text/javascript"></script>
	<script type="text/javascript">		
		Cufon.replace('ul#top-menu a',{textShadow:'1px 1px 1px #000000', hover:true})('h1, h2, h3, h4, h5, h6, span.fn',{textShadow:'1px 1px 1px #fff'})('.widget h3.widgettitle',{textShadow:'1px 1px 1px #fff'});
	</script>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/superfish.js"></script>
	
	<script type="text/javascript">
	//<![CDATA[
		jQuery.noConflict();
		
		jQuery('ul.nav').superfish({
			delay:       200,                            // one second delay on mouseout 
			animation:   {opacity:'show'},  // fade-in and slide-down animation 
			speed:       'fast',                          // faster animation speed 
			autoArrows:  true,                           // disable generation of arrow mark-up 
			dropShadows: false                            // disable drop shadows 
		}).find('li ul').prepend('<span class="dropdown-top"></span>');
		
		jQuery('ul.nav li a strong.sf-with-ul').parent('a').parent('li').addClass('sf-ul');
				
		et_search_bar();
				
		<!---- Search Bar Improvements ---->
		function et_search_bar(){
			var $searchform = jQuery('div#search-form'),
				$searchinput = $searchform.find("input#searchinput"),
				searchvalue = $searchinput.val();
				
			$searchinput.focus(function(){
				if (jQuery(this).val() === searchvalue) jQuery(this).val("");
			}).blur(function(){
				if (jQuery(this).val() === "") jQuery(this).val(searchvalue);
			});
		};
		
		var $post_info = jQuery("div.meta-info");
		if ($post_info.length) {
			$post_info.each(function (index, domEle) {
				var post_meta_width = jQuery(domEle).width(),
					post_meta_height = jQuery(domEle).height();
					
				if ( post_meta_height > 34 && !jQuery.browser.msie ) { 
					jQuery(domEle).find('.postinfo').css('margin-top', -30 - post_meta_height );
					jQuery(domEle).css('margin-top',70);
				}
				
				if ( post_meta_width < 460 ) {
					var new_width = (464 - post_meta_width) / 2;
					jQuery(domEle).css('margin-left',new_width);
				}
			});
		}
		
		var $comment_form = jQuery('form#commentform');
		$comment_form.find('input, textarea').focus(function(){
			if (jQuery(this).val() === jQuery(this).next('label').text()) jQuery(this).val("");
		}).blur(function(){
			if (jQuery(this).val() === "") jQuery(this).val( jQuery(this).next('label').text() );
		});
		
		$comment_form.find('input#submit').click(function(){
		if (jQuery("input#url").val() === jQuery("input#url").next('label').text()) jQuery("input#url").val("");
		});
		
		<?php if (get_option($shortname.'_disable_toptier') == 'on') echo('jQuery("ul.nav > li > ul").prev("a").attr("href","#");'); ?>
		
		Cufon.now();
	//]]>	
	</script>