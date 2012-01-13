<?php 

require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

require_once(TEMPLATEPATH . '/includes/functions/sidebars.php'); 

load_theme_textdomain('Memoir',get_template_directory().'/lang');

require_once(TEMPLATEPATH . '/epanel/options_memoir.php');

require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

require_once(TEMPLATEPATH . '/epanel/post_thumbnails_memoir.php');

add_action('wp_head','et_portfoliopt_additional_styles',100);
function et_portfoliopt_additional_styles(){ ?>
	<style type="text/css">
		#et_pt_portfolio_gallery { margin-left: -15px; }
		.et_pt_portfolio_item { margin-left: 21px; width: 192px; }
		.et_portfolio_small { margin-left: -40px !important; }
		.et_portfolio_small .et_pt_portfolio_item { margin-left: 32px !important; }
		.et_portfolio_large { margin-left: -10px !important; }
		.et_portfolio_large .et_pt_portfolio_item { margin-left: 15px !important; }
		
		.et_portfolio_more_icon, .et_portfolio_zoom_icon { top: 49px; }
		.et_portfolio_more_icon { left: 54px; }
		.et_portfolio_zoom_icon { left: 95px; }
		.et_portfolio_small .et_pt_portfolio_item { width: 102px; }
		.et_portfolio_small .et_portfolio_more_icon { left: 11px; }
		.et_portfolio_small .et_portfolio_zoom_icon { left: 49px; }
		.et_portfolio_large .et_pt_portfolio_item { width: 312px; }
		.et_portfolio_large .et_portfolio_more_icon, .et_portfolio_large .et_portfolio_zoom_icon { top: 85px; }
		.et_portfolio_large .et_portfolio_more_icon { left: 119px; }
		.et_portfolio_large .et_portfolio_zoom_icon { left: 158px; }
	</style>
<?php }

function et_create_dropcaps($post_text){
   global $shortname;
   
   if ( get_option($shortname . '_dropcaps') == 'false' ) return $post_text;
   
   $post_content_text = trim($post_text);
   $post_content_temp = trim(strip_tags($post_text));
   $coded_tag = strpos($post_content_text, 'class="drop-caps"');
	if ( $coded_tag !== false ) return $post_text;

   # don't create drop-cap if shortcodes is on top of the post content
   if ( $post_content_temp[0] == '[' || $post_content_temp == '' ) return $post_text;
   else {
      //get first 7 letters
      $first_word = mb_substr($post_content_temp, 0, 7, 'UTF-8');
   }
   
   $first_word_pos = strpos($post_content_text, $first_word);
   if ( $first_word_pos === false ) return $post_text;
      
   $post_content_firstletter = mb_substr($post_content_text, $first_word_pos, 1, 'UTF-8');
   if ( $first_word_pos == 0 )
      $post_content_text_temp = '';
   else
      $post_content_text_temp = mb_substr($post_content_text, 0, $first_word_pos-1, 'UTF-8');
   $post_content_text_temp2 = mb_substr($post_content_text, $first_word_pos+1, strlen($post_content_text), 'UTF-8');
      
   return '<span class="drop-caps">' . $post_content_firstletter . '</span>' . $post_content_text_temp . $post_content_text_temp2;
}

function register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );

if (class_exists('Walker_Nav_Menu')) {
	class description_walker extends Walker_Nav_Menu
	{
		function start_el(&$output, $item, $depth, $args) {
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
			$class_names = ' class="'. esc_attr( $class_names ) . '"';

			$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

			$prepend = '<strong>';
			$append = '</strong>';

			$description  = ! empty( $item->description ) ? esc_attr( $item->description ) : '';
			if (strlen($description) > 22) $description = substr($description,0,21);

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
			$item_output .= '<span>' . $description. '</span>' . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}

$wp_ver = substr($GLOBALS['wp_version'],0,3);
if ($wp_ver >= 2.8) include(TEMPLATEPATH . '/includes/widgets.php'); ?>