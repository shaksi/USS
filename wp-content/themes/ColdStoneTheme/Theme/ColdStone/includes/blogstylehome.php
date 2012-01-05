<!-- SUB POST DIVISIONS -->

<div class="single_wrap" style="margin: 0px; float: left;">
    <div class="single_post">
	<?php if (get_option('coldstone_duplicate_featured') == 'false') 
			$args=array(
				'showposts'=>get_option('coldstone_homepage_posts'),
				'post__not_in' => $ids,
				'paged'=>$paged,
				'category__not_in' => get_option('coldstone_exlcats_recent'));
		  else 
			$args=array(
				'showposts'=>get_option('coldstone_homepage_posts'),
				'paged'=>$paged,
				'category__not_in' => get_option('coldstone_exlcats_recent'),); ?>
<?php query_posts($args); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
        <?php endwhile; ?>
        <!--end recent post-->
        <div style="clear: both;"></div>
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
else { ?>
        <p class="pagination">
            <?php next_posts_link(__('&laquo; Previous Entries','ColdStone')) ?>
	        <?php previous_posts_link(__('Next Entries &raquo;','ColdStone')) ?>
        </p>
        <?php } ?>
        <?php else : ?>
        <!--If no results are found-->
        <div class="home-post-wrap2">
            <h2 ><?php _e('No Results Found','ColdStone') ?></h2>
            <p><?php _e('Sorry, your search returned zero results.','ColdStone') ?> </p>
        </div>
        <!--End if no results are found-->
        <?php endif; ?>
    </div>
    <!-- /single_post -->
    <div class="sidebar">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
        <?php endif; ?>
    </div>
    <!-- /sidebar -->
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
