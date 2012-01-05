<?php $post_number = get_option('simplepress_searchnum_posts'); ?>
<?php get_header(); ?>
	<div id="content<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
    	<div class="content_wrap<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
            <div class="content_wrap<?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " full" ?>">
            	<div id="posts" <?php if (is_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") print " style='width: 960px;'" ?>>
                    <div id="breadcrumbs">
                        <?php include(TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
                    </div>
                    <br class="clear"  />
					<?php 
						global $query_string; 

						parse_str($query_string, $qstring_array);
									
						$args = array('showposts' => $post_number,'paged'=>$paged);
						
						if ( isset($_GET['et_searchform_submit']) ) {			
							$postTypes = array();
							if ( !isset($_GET['et-inc-posts']) && !isset($_GET['et-inc-pages']) ) $postTypes = array('post');
							if ( isset($_GET['et-inc-pages']) ) $postTypes = array('page');
							if ( isset($_GET['et-inc-posts']) ) $postTypes[] = 'post';
							$args['post_type'] = $postTypes;
							
							if ( $_GET['et-month-choice'] != 'no-choice' ) {
								$et_year = substr($_GET['et-month-choice'],0,4);
								$et_month = substr($_GET['et-month-choice'], 4, strlen($_GET['et-month-choice'])-4);
								$args['year'] = $et_year;
								$args['monthnum'] = $et_month;
							}
							
							if ( $_GET['et-cat'] != 0 )
								$args['cat'] = $_GET['et-cat'];
						}	
						
						$args = array_merge($args,$qstring_array);
									
						query_posts($args);
					?>
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