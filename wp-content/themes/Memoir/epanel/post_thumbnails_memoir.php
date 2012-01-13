<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	
	//blog page template
	add_image_size( 'ptentry-thumb', 184, 184, true );
	//gallery page template
	add_image_size( 'ptgallery-thumb', 207, 136, true );
		
	//featured image size		
	add_image_size( 'entry-thumb', 135, 135, true );
	
	//portfolio page template
	add_image_size( 'ptportfolio-thumb', 260, 170, true );
	add_image_size( 'ptportfolio-thumb2', 260, 315, true );
	add_image_size( 'ptportfolio-thumb3', 140, 94, true );
	add_image_size( 'ptportfolio-thumb4', 140, 170, true );
	add_image_size( 'ptportfolio-thumb5', 430, 283, true );
	add_image_size( 'ptportfolio-thumb6', 430, 860, true );
	
};
/* --------------------------------------------- */

?>