<?php class ETSearchWidget extends WP_Widget
{
    function ETSearchWidget(){
		$widget_ops = array('description' => 'Display custom search field.');
		parent::WP_Widget(false,$name='ET Search',$widget_ops,$control_ops);
    }

  /* Displays the Widget in the front-end */
    function widget($args, $instance){
?>	
	<div id="custom-search">
		<div id="search-form">
			<form method="get" id="searchform1" action="<?php bloginfo('url'); ?>"> 
				<input type="text" value="<?php _e('Search this site...', 'Memoir'); ?>" name="s" id="searchinput" /> 
				<input type="image" src="<?php bloginfo('template_directory'); ?>/images/search_btn.png" id="searchsubmit" />
			</form>
		</div> <!-- end #search-form -->
	</div> <!-- end #custom-search -->
<?php
	}

}// end ETSearchWidget class

function ETSearchWidgetInit() {
  register_widget('ETSearchWidget');
}

add_action('widgets_init', 'ETSearchWidgetInit');

?>