<?php get_header(); ?>
<?php if (get_option('coldstone_featured') == 'on') { include(TEMPLATEPATH . '/includes/featured.php'); } ?>

<?php if (get_option('coldstone_format') == 'Blog Style') { ?>
	<?php include(TEMPLATEPATH . '/includes/blogstylehome.php'); ?>
<?php } else { include(TEMPLATEPATH . '/includes/defaultif.php'); } ?>

<?php get_footer(); ?>