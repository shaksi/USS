<?php the_post(); ?>

<?php get_header(); ?>
	<div id="content">
    	<div class="content_wrap">
            <div class="content_wrap">
            	<div id="posts">
                    <div id="breadcrumbs">
                        <?php include(TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
                    </div>
					<?php if (get_option('simplepress_integration_single_top') <> '' && get_option('simplepress_integrate_singletop_enable') == 'on') echo(get_option('simplepress_integration_single_top')); ?>
                    
                    <?php 
					 $gallery_cat = get_option('simplepress_gallery');
                     if(in_category($gallery_cat) && get_option('simplepress_gallery_enable') == "on") { include(TEMPLATEPATH . '/includes/single_gallery.php'); }
					else { include(TEMPLATEPATH . '/includes/single_blog.php'); }  ?>
                    
				<?php if (get_option('simplepress_show_postcomments') == 'on') comments_template('', true); ?>
                </div><!-- #posts -->  
				<?php get_sidebar(); ?>
            </div><!-- .content_wrap --> 
        </div><!-- .content_wrap --> 
    </div><!-- #content --> 
</div><!-- .wrapper --> 
<?php get_footer(); ?>