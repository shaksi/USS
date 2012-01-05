<?php if (get_option('coldstone_format') == 'Blog Style') { ?>
	<?php include(TEMPLATEPATH . '/includes/blogstylecat.php'); ?>
<?php } else { include(TEMPLATEPATH . '/includes/defaultcat.php'); } ?>
