<?php global $shortname; ?>
<script src="<?php bloginfo('template_directory'); ?>/js/colaborate_thin.js" type="text/javascript"></script> 
<script type="text/javascript"> 
//<![CDATA[
	jQuery.noConflict();
	
	Cufon.replace('h1')('h2',{textShadow:'1px 1px 0px #fff'})('h3',{textShadow:'1px 1px 0px #fff'})('#quote div span',{textShadow:'1px 1px 0px #fff'})('#blurbs div span.titles')('h5')('.hover span',{textShadow:'1px 1px 0px #fff'})('.fn',{textShadow:'1px 1px 0px #fff'});
	
	jQuery('ul.superfish').superfish({ 
		delay:       200,                            // one second delay on mouseout 
		animation:   {'marginLeft':'0px',opacity:'show'},  // fade-in and slide-down animation 
		speed:       'fast',                          // faster animation speed
		onBeforeShow: function(){ this.css('marginLeft','20px'); }, 			
		autoArrows:  true,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	
	<?php if (get_option('personalpress_disable_toptier') == 'on') echo('jQuery("ul.nav > li > ul").prev("a").attr("href","#");'); ?>
	
	jQuery("a.lightbox").fancybox({
		'overlayShow'			: false,
		'zoomSpeedIn'			: 600,
		'zoomSpeedOut'			: 500,
		'easingIn'				: 'easeOutBack',
		'easingOut'				: 'easeInBack'
	});
	
	jQuery('.gallery_item .thumb').hover(function() {
		jQuery(this).children('.readmore').animate({opacity:'show', 'top':'170px'}, "fast");
	}, function() {
		jQuery(this).children('.readmore').animate({opacity:'hide', 'top':'148px'}, "fast");
	});
	
	var pagemenuwidth = jQuery("ul.nav").width();
	var pagemleft = Math.round((960 - pagemenuwidth) / 2);
	jQuery("ul.nav").css('padding-left',pagemleft);

	
	jQuery('div#navwrap ul.nav li a').hover(function() {
		jQuery(this).animate({opacity: .4}, "fast");
	}, function() {
		jQuery(this).animate({opacity: 1}, "fast");
	});
	
	jQuery('img#logo').hover(function() {
		jQuery(this).animate({opacity: .6}, "fast");
	}, function() {
		jQuery(this).animate({opacity: 1}, "fast");
	});
	
	jQuery('.thumb div .image').hover(function() {
		jQuery(this).animate({opacity: .8}, "fast");
	}, function() {
		jQuery(this).animate({opacity: 1}, "fast");
	});

	<?php if (is_home()) { ?>
	jQuery('div#switcher div.item div.wrap').hover(function() {
		jQuery(this).children('div.hover').animate({opacity: "show", top: "-140"}, "fast");
	}, function() {
		jQuery(this).children('div.hover').animate({opacity: "hide", top: "-160"}, "fast");
	});
	
	<!---- et_switcher plugin v1.4 ---->
	(function($)
	{
		$.fn.et_switcher = function(options)
		{
			var defaults =
			{
			   slides: '>div',
			   activeClass: 'active',
			   linksNav: '',
			   findParent: true, //use parent elements in defining lengths
			   lengthElement: 'li', //parent element, used only if findParent is set to true
			   useArrows: false,
			   arrowLeft: 'prevlink',
			   arrowRight: 'nextlink',
			   auto: false,
			   autoSpeed: <?php echo(get_option($shortname.'_slider_autospeed')); ?>
			};

			var options = $.extend(defaults, options);

			return this.each(function()
			{
				var slidesContainer = jQuery(this);
				slidesContainer.find(options.slides).hide().end().find(options.slides).filter(':first').css('display','block');
		 
				if (options.linksNav != '') {
					var linkSwitcher = jQuery(options.linksNav);
									
					linkSwitcher.click(function(){	
				
						var targetElement;

						if (options.findParent) targetElement = jQuery(this).parent();
						else targetElement = jQuery(this);
						
						if (targetElement.hasClass('active')) return false;
						
						jQuery('div.item .active').animate({marginTop: '0px'},500,function(){
							jQuery(this).removeClass('active');
							
						});
						jQuery(this).animate({marginTop: '-15px'},500,function(){
							jQuery(this).addClass('active');
							
						});
						var ordernum = targetElement.prevAll(options.lengthElement).length;
					
						slidesContainer.find(options.slides).filter(':visible').hide().end().end().find(options.slides).filter(':eq('+ordernum+')').stop().fadeIn(700);
						
						jQuery('div.#slides div.slide div.banner').css('top', '0px');
						slidesContainer.find(options.slides).filter(':visible').children('div').animate({top: '90px'}, 300);	
						
						if (typeof interval != 'undefined') {
							clearInterval(interval);
							auto_rotate();
						};
						
						return false;
					});
				};
				
				jQuery('#'+options.arrowRight+', #'+options.arrowLeft).click(function(){
				  
					var slideActive = slidesContainer.find(options.slides).filter(":visible"),
						nextSlide = slideActive.next(),
						prevSlide = slideActive.prev();

					if (jQuery(this).attr("id") == options.arrowRight) {
						if (nextSlide.length) {
							var ordernum = nextSlide.prevAll().length;                        
						} else { var ordernum = 0; }
					};

					if (jQuery(this).attr("id") == options.arrowLeft) {
						if (prevSlide.length) {
							var ordernum = prevSlide.prevAll().length;                  
						} else { var ordernum = slidesContainer.find(options.slides).length-1; }
					};

					slidesContainer.find(options.slides).filter(':visible').hide().end().end().find(options.slides).filter(':eq('+ordernum+')').stop().fadeIn(700);

					if (typeof interval != 'undefined') {
						clearInterval(interval);
						auto_rotate();
					};

					return false;
				});   

				if (options.auto) {
					auto_rotate();
				};
				
				function auto_rotate(){
					interval = setInterval(function(){
						var slideActive = slidesContainer.find(options.slides).filter(":visible"),
							nextSlide = slideActive.next();
					 
						if (nextSlide.length) {
							var ordernum = nextSlide.prevAll().length;                        
						} else { var ordernum = 0; }
					 
						if (options.linksNav === '') 
							jQuery('#'+options.arrowRight).trigger("click");
						else 		 		
							linkSwitcher.filter(':eq('+ordernum+')').trigger("click");
					},options.autoSpeed);
				};
			});
		}
	})(jQuery);
			
	var $featuredArea = jQuery('#featured #slides');
	
	if ($featuredArea.length) {
		$featuredArea.et_switcher({
			linksNav: '#switcher div div.wrap',
			auto: <?php if (get_option($shortname.'_slider_auto') == 'on') print "true"; else print "false";  ?>,
			autoSpeed: <?php echo(get_option($shortname.'_slider_autospeed')); ?>,
			findParent: true,
			lengthElement: 'div'
		});
	};

	jQuery('div.#slides div.active div.banner').css('top', '90px');
	<?php }; ?>
	Cufon.now();
//]]>	
</script> 