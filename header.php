<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<meta property="og:title" content="Shaksi little corner of the websphere" />
<meta property="og:type" content="blog" />
<meta property="og:url" content="http://shak.si/" />
<meta property="og:image" content="http://shak.si/site_look.jpg" />
<meta property="og:locale" content="english" />
<link rel="image_src" href="en_UK" />

<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo, a.readmore, a.readmore span, #content-top, #content, #content-bottom, #menu-top, #menu-content, #menu-bottom, #main-area, h1.title, h2.title, h3#comments, span.post-overlay, .widget h3.widgettitle, .widget h3.widgettitle span, .widget, #sidebar, span.overlay');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7style.css" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie8style.css" />
<![endif]-->

<script type="text/javascript">
	document.documentElement.className = 'js';
</script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="main_bg">
		<?php $bg_image = ( trim(get_option('memoir_custom_background')) <> '' ) ? trim(get_option('memoir_custom_background')) : get_bloginfo('template_directory') . '/images/bg.jpg'; ?>
		<img src="<?php echo $bg_image; ?>" alt="" />
	</div>
	
	<div id="container"<?php global $fullwidth; if ( is_page_template('page-full.php') || $fullwidth ) echo ' class="fullwidth"'; ?>>
	  <?php
	  /*
		<div id="menu">
			<div id="menu-top"></div>
			<div id="menu-content">

				<a href="<?php bloginfo('url'); ?>"><?php $logo = (get_option('memoir_logo') <> '') ? get_option('memoir_logo') : get_bloginfo('template_directory').'/images/logo.png'; ?>
					<img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" id="logo"/>
				</a>
	
				<?php $menuClass = 'nav sf-vertical sf-menu';
				$menuID = 'top-menu';
				$primaryNav = '';
				if (function_exists('wp_nav_menu')) {
					$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false, 'walker' => new description_walker() ) ); 
				};
				if ($primaryNav == '') { ?>
					<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
						<?php if (get_option('memoir_home_link') == 'on') { ?>
							<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','Memoir') ?></a></li>
						<?php }; ?>
						
						<?php show_page_menu($menuClass,false,false); ?>
						<?php show_categories_menu($menuClass,false); ?>
					</ul> <!-- end ul#nav -->
				<?php }	else echo($primaryNav); ?>	
			</div> <!-- end #menu-content -->	
			<div id="menu-bottom"></div>
		</div> <!-- end #menu -->	
	*/
	?>
		<div id="content-top"></div>
		
		<div id="content" class="clearfix">
		  