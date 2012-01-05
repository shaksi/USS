<?php $thumb = '';
$width = 182;
$height = 182;
$classtext = '';
$titletext = get_the_title();
$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
$thumb = $thumbnail["thumb"];
?>
<div class="post">
	<?php if ($thumb <> '' && get_option('simplepress_thumbnails_index') == 'on') { ?>
    <div class="thumb">
        <div>
            <span class="image" style="background-image: url(<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext, true, true); ?>);">
                <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-overlay.png" alt="" /></a>
            </span>
        </div>
        <span class="shadow"></span>
    </div>
    <?php }; ?>
    <div class="text <?php if ($thumb == '' || get_option('simplepress_thumbnails_index') == 'false') print "no_thumb" ?>">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <span class="postinfo">
            <span class="line"></span>
            <?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
            <span class="line"></span>
        </span>
        <?php if (get_option('simplepress_blog_style') == 'false') { ?>
		<?php truncate_post(400);?>
        <br class="clear" />
        <span class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('read more','SimplePress'); ?></a></span>
		<?php }; ?>
    </div>
    <?php if (get_option('simplepress_blog_style') == 'on') { ?>
    <?php the_content(''); ?>
    <br class="clear" />
    <span class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('read more','SimplePress'); ?></a></span>
    <?php }; ?>
</div><!-- .post -->  
