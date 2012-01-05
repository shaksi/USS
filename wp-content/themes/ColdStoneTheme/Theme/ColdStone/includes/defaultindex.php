<?php get_header(); ?>

<div class="single_wrap">
    <div style="float:left;margin-top:25px;width:600px;">
		<?php if (is_archive() || is_search() || is_tag()) {
				if (is_archive()) $post_number = get_option('coldstone_archivenum_posts');
				if (is_search()) $post_number = get_option('coldstone_searchnum_posts');
				if (is_tag()) $post_number = get_option('coldstone_tagnum_posts');
				global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged");
		  } ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="subpost" style="background:none;">
			<?php $width = 62;
				  $height = 62;
						  
				  $classtext = 'catimage';
				  $titletext = get_the_title();

				  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
				  $thumb = $thumbnail["thumb"];  ?>
            
            <?php if($thumb != '') { ?>
				<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
            <?php } ?>
			
            <div class="sub_article" style="width: 420px;">
                <h3><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a></h3>
                <?php if (get_option('coldstone_postinfo1') <> '') { ?>
					<div class="post-info2"><?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?></div>
				<?php } ?>
                <div style="color:#333;">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <!-- subpost -->
        </div>
        <?php endwhile; ?>
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
		<?php if (is_archive() || is_search() || is_tag()) wp_reset_query(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
<?php get_footer(); ?>
