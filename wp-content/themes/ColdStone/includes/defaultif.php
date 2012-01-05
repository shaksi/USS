<?php if (get_option('coldstone_format') == 'Magazine Style') { ?>
	<?php include(TEMPLATEPATH . '/includes/magazine.php'); ?>
<?php } else { include(TEMPLATEPATH . '/includes/default.php'); } ?>