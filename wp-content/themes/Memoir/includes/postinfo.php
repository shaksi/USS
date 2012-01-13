<?php if (!is_single() && get_option('memoir_postinfo1') <> '') { ?>
	<div class="meta-info"><span class="shadow-left"></span><span class="shadow-right"></span>
		<div class="postinfo">
			<span>
				<span>
					<?php _e('Posted','Memoir'); ?> <?php if (in_array('author', get_option('memoir_postinfo1'))) { ?> <?php _e('by','Memoir'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('memoir_postinfo1'))) { ?> <?php _e('on','Memoir'); ?> <?php the_time(get_option('memoir_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('memoir_postinfo1'))) { ?> <?php _e('in','Memoir'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('memoir_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','Memoir'), __('1 comment','Memoir'), '% '.__('comments','Memoir')); ?><?php }; ?>
				</span>
			</span>
		</div>
	</div>
<?php } elseif (is_single() && get_option('memoir_postinfo2') <> '') { ?>
	<div class="meta-info"><span class="shadow-left"></span><span class="shadow-right"></span>
		<div class="postinfo">
			<span>
				<span>
					<?php _e('Posted','Memoir'); ?> <?php if (in_array('author', get_option('memoir_postinfo2'))) { ?> <?php _e('by','Memoir'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('memoir_postinfo2'))) { ?> <?php _e('on','Memoir'); ?> <?php the_time(get_option('memoir_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('memoir_postinfo2'))) { ?> <?php _e('in','Memoir'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('memoir_postinfo2'))) { ?> | <?php comments_popup_link(__('0 comments','Memoir'), __('1 comment','Memoir'), '% '.__('comments','Memoir')); ?><?php }; ?>
				</span>
			</span>
		</div>
	</div>
<?php }; ?>