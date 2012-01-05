<?php get_header(); ?>

<div class="single_wrap">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="single_post">
        <h1><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h1>
		<?php if (get_option('coldstone_page_thumbnails') == 'on') { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
        <?php the_content(); ?>
		<div style="clear: both;"></div>
		<?php if (get_option('coldstone_show_pagescomments') == 'on') { ?>
			<?php comments_template('', true); ?>
		<?php }; ?>	
    </div>
    <!-- /single_post -->
    <?php endwhile;?>
    <?php else : ?>
    <?php endif; ?>
    <?php get_sidebar(); ?>
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
<?php get_footer(); ?>
