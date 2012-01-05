<?php $gallery_cat = get_option('simplepress_gallery');
if (is_archive()) $post_number = get_option('simplepress_archivenum_posts');
if (is_search()) $post_number = get_option('simplepress_searchnum_posts');
if (is_tag()) $post_number = get_option('simplepress_tagnum_posts');
if (is_category()) $post_number = get_option('simplepress_catnum_posts');
if (is_category($gallery_cat)) $post_number = get_option('simplepress_gallery_posts'); ?>
<?php get_header(); ?>
	<div id="content<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
    	<div class="content_wrap<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
            <div class="content_wrap<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
            	<div id="posts" <?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " style='width: 960px;'" ?>>
                    <div id="breadcrumbs">
                        <?php include(TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
                    </div>
                    <br class="clear"  />
					<?php global $query_string; 
                    if (is_category()) query_posts("showposts=$post_number&paged=$paged&cat=$cat");
                    else query_posts($query_string."&showposts=$post_number&paged=$paged"); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if(is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") { include(TEMPLATEPATH . '/includes/gallery.php'); }
					else { include(TEMPLATEPATH . '/includes/entry.php'); }  ?>
					<?php endwhile; ?> 
						<br class="clear"  />
						<div class="entry page-nav clearfix">
							<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
							else { ?>
								 <?php include(TEMPLATEPATH . '/includes/navigation.php'); ?>
							<?php } ?>
						</div> <!-- end .entry -->
                    <?php else : ?>
						<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
                    <?php endif; wp_reset_query(); ?>
                </div><!-- #posts -->  
				<?php if(is_category($gallery_cat)) { } else { get_sidebar(); }; ?>
            </div><!-- .content_wrap --> 
        </div><!-- .content_wrap --> 
    </div><!-- #content --> 
</div><!-- .wrapper --> 
<?php get_footer(); ?>