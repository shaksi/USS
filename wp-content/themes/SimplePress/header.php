<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox-1.2.6.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie6style.css" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img#logo, .slider_image img, .banner, .banner .readmore, .wrap .image img, .thumb div .image img, div.avatar span.overlay');</script>
<![endif]--> 
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7style.css" />
<![endif]--> 
<script src="<?php bloginfo('template_directory'); ?>/js/fancybox.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/easing.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/superfish.js" type="text/javascript"></script> 
</head>
<body>
  
<div class="wrapper">
  <div id="tool_header">
    <div id="logo">
    <a href="<?php bloginfo('url'); ?>"><?php $logo = (get_option('simplepress_logo') <> '') ? get_option('simplepress_logo') : get_bloginfo('template_directory').'/images/logo.png'; ?>
  	<img src="<?php echo $logo; ?>" alt="Logo" id="logo"/></a>
  	</div>
  	<div></div>
    <div id="tools">
        <div id="subscribe">
          <ul>
            <li><a href="http://experts.cdkn.org" title="Roster of Experts" rel=
            "external">Roster of Experts</a></li>

            <li><a title="rss feed" href="/feed/?lang=en_gb" rel="external">RSS</a></li>

            <li><a href="/newsletter" class="join_link">Newsletter</a></li>
          </ul>
        </div><!--/subscribe-->

        <form id="searchform" method="get" action="http://cdkn.org">
            <input id="s" name="s" type="text" value="To search, type and hit enter" onfocus=
            "if (this.value == 'To search, type and hit enter') {this.value = '';}" onblur=
            "if (this.value == '') {this.value = 'To search, type and hit enter';}" size="32"
            tabindex="1" /> <input id="searchsubmit" name="searchsubmit" type="submit" value=
            "&Acirc;&raquo;" tabindex="2" /> <input type="hidden" name="loclang" value=
            "en_gb" />

        </form>
      </div><!--/tools-->
  </div><!--/tool_header-->
	  <br class="clear" />
    <div id="navwrap">
        <span class="nav_top"></span>
		<?php $menuClass = 'nav superfish';
        $primaryNav = '';
        if (function_exists('wp_nav_menu')) {
            $primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) ); 
        };
        if ($primaryNav == '') { ?>
            <ul class="<?php echo $menuClass; ?>">
                <?php if (get_option('simplepress_home_link') == 'on') { ?>
                    <li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php bloginfo('url'); ?>"><?php _e('Home','SimplePress') ?></a></li>
                <?php }; ?>
                
                <?php show_page_menu($menuClass,false,false); ?>
                <?php show_categories_menu($menuClass,false); ?>					
            </ul> <!-- end ul.nav -->
        <?php }
        else echo($primaryNav); ?>
        
        <?php global $default_colorscheme, $shortname; $colorSchemePath = '';
        $colorScheme = get_option($shortname . '_color_scheme');
        if ($colorScheme <> $default_colorscheme) $colorSchemePath = strtolower($colorScheme) . '/'; ?>
        <br class="clear" />
        <span class="nav_bottom"></span>
    </div><!-- #navwrap --> 