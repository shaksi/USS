<?php get_header(); ?>

<div class="single_wrap">
    <div class="single_post">
		<?php if (get_option('coldstone_integration_single_top') <> '' && get_option('coldstone_integrate_singletop_enable') == 'on') echo(get_option('coldstone_integration_single_top')); ?>
        <?php query_posts($query_string . "&order=ASC") ?>
        <?php while (have_posts()) : the_post(); $loopcounter++; ?>
        <h1><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h1>
        <?php if (get_option('coldstone_postinfo2') <> '') { ?>
			<div class="post-info"><?php include(TEMPLATEPATH . '/includes/postinfo-create.php'); ?></div>
		<?php } ?>
        <div style="clear: both;"></div>
        <?php if (get_option('coldstone_thumbnails') == 'on') { include(TEMPLATEPATH . '/includes/thumbnail.php'); } ?>
        <?php the_content(); ?>
		<div style="clear: both;"></div>
		<?php if (get_option('coldstone_integration_single_bottom') <> '' && get_option('coldstone_integrate_singlebottom_enable') == 'on') echo(get_option('coldstone_integration_single_bottom')); ?>
        <?php if (get_option('coldstone_foursixeight') == 'on') { include(TEMPLATEPATH . '/includes/468x60.php'); } ?>
        <?php if (get_option('coldstone_show_postcomments') == 'on') { ?>
			<?php comments_template('', true); ?>
		<?php }; ?>
        <!-- /single_post -->
        <?php endwhile;?>
    </div>
    <?php get_sidebar(); ?>
</div>
<div class="footer" style="height:15px;margin-bottom:0;"></div>
<?php get_footer(); ?>
