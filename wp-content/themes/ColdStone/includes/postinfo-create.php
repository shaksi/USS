<?php if (!(is_single())) { ?>
	<?php _e('Posted','ColdStone') ?> <?php if (in_array('author', get_option('coldstone_postinfo1'))) { ?> <?php _e('by','ColdStone') ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('coldstone_postinfo1'))) { ?> <?php _e('on','ColdStone') ?> <?php the_time(get_option('coldstone_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('coldstone_postinfo1'))) { ?> <?php _e('in','ColdStone') ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('coldstone_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','ColdStone'), __('1 comment','ColdStone'), '% '.__('comments','ColdStone')); ?><?php }; ?>
<?php } elseif (is_single()) { ?>
	<?php _e('Posted','ColdStone') ?> <?php if (in_array('author', get_option('coldstone_postinfo2'))) { ?> <?php _e('by','ColdStone') ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('coldstone_postinfo2'))) { ?> <?php _e('on','ColdStone') ?> <?php the_time(get_option('coldstone_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('coldstone_postinfo2'))) { ?> <?php _e('in','ColdStone') ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('coldstone_postinfo2'))) { ?> | <?php comments_popup_link(__('0 comments','ColdStone'), __('1 comment','ColdStone'), '% '.__('comments','ColdStone')); ?><?php }; ?>
<?php }; ?> 