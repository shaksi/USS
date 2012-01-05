<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	
	add_theme_support( 'post-thumbnails' );
	
	//featured.php
	add_image_size( 'featuredimage', 883, 250, true );
	
	//thumbnail.php
	add_image_size( 'globalimage', get_option($shortname.'_thumbnail_width'), get_option($shortname.'_thumbnail_height'), true );
	
	//thumbnail.php
	add_image_size( 'thumbpage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//magazine.php
	add_image_size( 'magazine', 470, 110, true );
	
	//magazine.php, default.php
	add_image_size( 'magazine2', 62, 62, true );
	
};
/* --------------------------------------------- */

?>