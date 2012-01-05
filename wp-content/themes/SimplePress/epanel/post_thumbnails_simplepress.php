<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	
	//blog page template
	add_image_size( 'ptentry-thumb', 184, 184, true );
	//gallery page template
	add_image_size( 'ptgallery-thumb', 207, 136, true );
		
	//featured image size
	add_image_size( 'featured-thumb', 954, 375, true );
	add_image_size( 'featured-small', 83, 83, true );
		
	add_image_size( 'entry-thumb', 182, 182, true );
	
};
/* --------------------------------------------- */

?>