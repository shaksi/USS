<?php global $coldstone_color_scheme, $coldstone_featured_number, $coldstone_homepage_posts, $coldstone_banner_url_one, $coldstone_banner_url_two, $coldstone_banner_image_one, $coldstone_banner_image_two, $coldstone_postinfo_posts, $coldstone_postinfo_bar, $coldstone_catnum_posts; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?> 
<?php elegant_keywords(); ?> 
<?php elegant_canonical(); ?>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<meta name="keywords" content="YOUR KEYWORDS HERE" />
<meta name="description" content="YOUR SITE DESCRIPTION HERE" />

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6style.css" />
<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/inc/pngfix.js"></script>
<![endif]-->
<!--[if IE 8]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie8style.css" />
<![endif]-->
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<!-- Start of the page -->
<div class="htop"></div>
<div id="wrapp_">
<div class="logo"> <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-<?php echo $coldstone_color_scheme; ?>.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>" /></a> </div>
<!-- /logo -->
<!-- TOP LEVEL NAVIGATION -->
			
<div class="tnavwrap">
    <div class="tnavileft"></div>
    <div class="tnavinner">
        <div class="menu">
			<?php $menuClass = 'nav superfish';
			$primaryNav = '';
			if (function_exists('wp_nav_menu')) {
				$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) ); 
			};
			if ($primaryNav == '') { ?>
				<ul class="<?php echo $menuClass; ?>">
					<?php if (get_option('coldstone_swap_navbar') == 'false') { ?>
						<?php if (get_option('coldstone_home_link') == 'on') { ?>
							<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','ColdStone') ?></a></li>
						<?php }; ?>
						
						<?php show_page_menu($menuClass,false,false); ?>
					<?php } else { ?>
						<?php show_categories_menu($menuClass,false); ?>
					<?php } ?>
				</ul> <!-- end ul#nav -->
			<?php }
			else echo($primaryNav); ?>
			
        </div>
    </div>
    <!-- /tnavinner -->
    <div class="tnavend"></div>
</div>
<!-- /tnavwrap -->
<!-- MAIN LEVEL NAVIGATION -->
<div class="bnavwrap">
    <div class="bnavileft"></div>
    <div class="bnavinner">
		<?php if (get_option('coldstone_search') == 'on') { ?> 
			<ul>
				<li class="searchli">
					<div class="search">
						<?php include("searchform.php"); ?>
					</div>
					<!-- /search -->
				</li>
			</ul>
		<?php }; ?>
		
       
			
			<?php $menuClass = 'nav superfish';
			$menuID = 'nav2';
			$secondaryNav = '';
			if (function_exists('wp_nav_menu')) {
				$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) ); 
			};
			if ($secondaryNav == '') { ?>
				<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
					<?php if (get_option('coldstone_swap_navbar') == 'false') { ?>
						<?php show_categories_menu($menuClass,false); ?>
					<?php } else { ?>
						<?php if (get_option('coldstone_home_link') == 'on') { ?>
							<li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','ColdStone') ?></a></li>
						<?php }; ?>
						
						<?php show_page_menu($menuClass,false,false); ?>
					<?php } ?>
				</ul> <!-- end ul#nav -->
			<?php }
			else echo($secondaryNav); ?>
       
    </div>
    <!-- /bnavinner -->
    <div class="bnavend"></div>
    <div style="clear: both;"></div>
</div>
<!-- /bnavwrap -->
