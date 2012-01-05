<?php get_header(); ?>
<!-- SUB POST DIVISIONS -->

<div class="single_wrap" style="margin: 0px; float: left;">
    <div class="single_post">
	<?php if (is_archive() || is_search() || is_tag()) {
				if (is_archive()) $post_number = get_option('coldstone_archivenum_posts');
				if (is_search()) $post_number = get_option('coldstone_searchnum_posts');
				if (is_tag()) $post_number = get_option('coldstone_tagnum_posts');
				global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged");
		  } ?>
	<?php if (is_category()) query_posts("cat=$cat&showposts=$coldstone_catnum_posts&paged=$paged"); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
  if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
        <h2><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h2>
        <?php if (get_option('coldstone_postinfo1') <> '') { ?>
			<div class="post-info"><?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?></div>
		<?php } ?>
        <div style="clear: both;"></div>
        <?php if (get_option('coldstone_thumbnails') == 'on') { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
        <?php the_content(); ?>
		<div style="clear: both;"></div>
        <?php comments_template(); ?>
        <?php endwhile;?>
        <div style="clear: both;"></div>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
        <p class="pagination">
            <?php next_posts_link(__('&laquo; Previous Entries','ColdStone')) ?>
	        <?php previous_posts_link(__('Next Entries &raquo;','ColdStone')) ?>
        </p>
        <?php } ?>
        <?php else : ?>
        <h2 ><?php _e('No Results Found','ColdStone') ?></h2>
        <p><?php _e('Sorry, your search returned zero results.','ColdStone') ?> </p>
        <?php endif; ?>
		<?php if (is_category() || is_archive() || is_search() || is_tag()) wp_reset_query(); ?>
    </div>
    <!-- /single_post -->
    <?php get_sidebar(); ?>
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
<?php get_footer(); ?>