<?php if (is_page()) { 
		  $width = get_option('coldstone_thumbnail_width_pages');
		  $height = get_option('coldstone_thumbnail_height_pages');
	  } else { 
		  $width = get_option('coldstone_thumbnail_width');
		  $height = get_option('coldstone_thumbnail_height');
	  };
	  
	  $classtext = 'single-thumb';
	  $titletext = get_the_title();

	  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	  $thumb = $thumbnail["thumb"];  ?>

<?php if($thumb != '') { ?>
	<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
<?php } ?>
