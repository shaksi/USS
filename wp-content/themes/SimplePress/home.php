<?php get_header(); ?>
	<?php if (get_option('simplepress_featured') == 'on') include(TEMPLATEPATH . '/includes/featured.php'); ?>
	<?php if (get_option('simplepress_quote') == 'on' && get_option('simplepress_blog_style') == 'false') { ?>
	<div id="quote">
    	<div>
            <?php echo (get_option('simplepress_quote_one')); ?>
            <br class="clear" />
          <span><?php echo (get_option('simplepress_quote_two')); ?></span>
        </div>
    </div>
    <?php }; ?>
    <?php if (get_option('simplepress_blog_style') == 'on') { ?>
	<?php if (get_option('simplepress_duplicate') == 'false') {
    $args=array(
           'showposts'=>get_option('simplepress_homepage_posts'),
           'post__not_in' => $ids,
           'paged'=>$paged,
           'category__not_in' => get_option('simplepress_exlcats_recent'),
    );
    } else {
        $args=array(
           'showposts'=>get_option('simplepress_homepage_posts'),
           'paged'=>$paged,
           'category__not_in' => get_option('simplepress_exlcats_recent'),
        );
    };
    query_posts($args); ?>
	<div id="content" style="margin-top: 40px;">
    	<div class="content_wrap">
            <div class="content_wrap">
            	<div id="posts">			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php include(TEMPLATEPATH . '/includes/entry.php'); ?>
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
  <?php }; ?>
<?php if (get_option('simplepress_blog_style') == 'false') { ?>
<div id="strip-top"></div>
<div id="strip">
  <div> <?php echo (get_option('simplepress_strip')); ?>
      <img class="arrow" src="<?php bloginfo('template_directory'); ?>/images/strip-arrow.png" alt="" />
  </div>
</div>
    <div id="blurbs">
		<?php for ($i = 1; $i <= 3; $i++) { ?>
		<?php query_posts('page_id=' . get_pageId(html_entity_decode(get_option('simplepress_service_'.$i)))); while (have_posts()) : the_post(); ?>
        <?php $icon = '';
						$icon = get_post_meta($post->ID, 'Icon', true);
						$tagline = '';
						$tagline = get_post_meta($post->ID, 'Tagline', true); ?>
        <div <?php if ($icon <> '') { ?>style="background-image: url(<?php echo $icon; ?>);"<?php }; ?>>
            <span class="titles"><?php the_title(); ?></span>
            <?php global $more;   
						$more = 0;
						the_content(""); ?>
            <br class="clear" />
            <span class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('read more','SimplePress'); ?></a></span>
        </div>
        <?php endwhile; wp_reset_query(); ?>
		<?php }; ?>

        <br class="clear" />
    </div>
    <span class="blurbs_shadow"></span>
<?php }; ?>
</div><!-- .wrapper --> 
<div id="home_side">
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>	