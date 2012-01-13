<?php

// Theme Constants
define("THEME_PREFIX", "launch_");

// Theme Location
define('THEME', get_bloginfo('template_url'), true);

// Add RSS Feed Links
add_theme_support( 'automatic-feed-links' );

// The Admin Page
add_action('admin_menu', "sf_launch_admin_init");

// Register Admin
function sf_launch_admin_init()
{
	$page = add_theme_page( "Launch Options", "Theme Options", 8, 'sf_launch_admin_menu', 'sf_launch_admin');

	// Custom Image Uploaders
	sf_add_img_upload_filter(THEME_PREFIX.'background_img', 'sf_handle_bg_upload');
	sf_add_img_upload_filter(THEME_PREFIX.'logo_img', 'sf_handle_logo_upload');
	sf_add_img_upload_filter(THEME_PREFIX.'favicon', 'sf_handle_favicon_upload');
}

// Image Upload Helper Function
function sf_add_img_upload_filter($option_name, $handler) {
  add_filter('pre_update_option_'.$option_name, $handler, 10, 2);
}

// Image Upload Handler Functions
function sf_handle_bg_upload($new_value, $old_value) {
  return sf_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'background_img_upload', 
    THEME_PREFIX.'delete_bg_img');
}

function sf_handle_logo_upload($new_value, $old_value) {
  return sf_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'logo_img_upload', 
    THEME_PREFIX.'delete_logo_img');
}

function sf_handle_favicon_upload($new_value, $old_value) {
  return sf_handle_img_upload(
    $new_value, 
    $old_value, 
    THEME_PREFIX.'favicon_upload', 
    THEME_PREFIX.'delete_favicon');
}

// Generic Image Upload Handler
function sf_handle_img_upload($new_value, $old_value, $file_index, $delete_field) {
  if ( isset($_POST[$delete_field]) && $_POST[$delete_field]=='true' )
    return '';

  if ( empty($_FILES) || !isset($_FILES[$file_index]) || 0==$_FILES[$file_index]['size'] )
    return $old_value;

  $overrides = array('test_form' => false);
  $file = wp_handle_upload($_FILES[$file_index], $overrides);

  if ( isset($file['error']) )
    wp_die( $file['error'] );

  $url = $file['url'];
  $type = $file['type'];
  $file = $file['file'];
  $filename = basename($file);

  // Construct The Object Array
  $object = array(
		  'post_title' => $filename,
		  'post_content' => $url,
		  'post_mime_type' => $type,
		  'guid' => $url
		  );

  // Save The Data
  $id = wp_insert_attachment($object, $file);

  // Add The Meta
  wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $file ) );

  do_action('wp_create_file_in_uploads', $file, $id); // For replication
  return esc_url($url);
}

function sf_launch_admin() {

	$option_fields = array();

	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>Launch Theme Options Saved.</p></div>';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/functions.css" type="text/css" media="all" />';
	
	// Accordion Script
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/scripts/accordion/style.css" type="text/css" media="all" />';
	echo '<script src="'.get_bloginfo('template_url').'/scripts/accordion/jquery.ui.js" type="text/javascript"></script>';
	echo '<script src="'.get_bloginfo('template_url').'/scripts/accordion/jquery.accordion.js" type="text/javascript"></script>';
	
	// Color Picker Script
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/scripts/colorpicker/style.css" type="text/css" media="all" />';
	echo '<script src="'.get_bloginfo('template_url').'/scripts/colorpicker/jquery.colorpicker.js" type="text/javascript"></script>';
	echo '<script src="'.get_bloginfo('template_url').'/scripts/colorpicker/jquery.eye.js" type="text/javascript"></script>';
	
	// Styling File Form Elements
	echo '<script src="'.get_bloginfo('template_url').'/scripts/si.files.js" type="text/javascript"></script>';
?>

<div class="wrap">
    <div id="icon-options-general" class="icon32"><br/></div>

    <h2>Launch Theme Options</h2>
    <div class="metabox-holder">
    	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php wp_nonce_field('update-options'); ?>
    
        <div id="theme-options">
	        <div id="accordion" class="postbox-container">
	            <?php
	            	include("options/custom-logo.php");
	            	include("options/custom-favicon.php");
	            	include("options/custom-styles.php");
	            	include("options/mailchimp.php");
	        		include("options/intro-text.php");
	        		include("options/twitter-name.php");
	        		include("options/footer-text.php");
	        		include("options/google-analytics.php");
	        	?>
	        </div> <!-- postbox-container -->
        </div> <!-- theme-options -->
        
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="<?php echo implode(",", $option_fields); ?>" />
        </form>
        
        <script type="text/javascript" language="javascript">SI.Files.stylizeAll();</script>
    </div> <!-- metabox-holder -->
</div> <!-- wrap -->

<?php
}

// Custom Styles Function
add_action( 'parse_request', 'sf_custom_css' );
function sf_custom_css($wp) {
    if (
        !empty( $_GET['sf-custom-content'] )
        && $_GET['sf-custom-content'] == 'css'
    ) {
        header( 'Content-Type: text/css' );
        require dirname( __FILE__ ) . '/style-custom.php';
        exit;
    }
}
?>