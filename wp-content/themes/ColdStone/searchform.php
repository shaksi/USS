<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input type="image" id="searchsubmit" value="<?php _e('Search','ColdStone') ?>" src="<?php bloginfo('stylesheet_directory'); ?>/img/search-button-<?php echo(get_option('coldstone_color_scheme')); ?>.gif" />
        <input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
    </div>
</form>
