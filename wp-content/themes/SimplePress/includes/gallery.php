<?php $thumb = '';
$width = 182;
$height = 182;
$classtext = '';
$titletext = get_the_title();
$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,true);
$thumb = $thumbnail["thumb"];
?>
<div class="post gallery_item">
    <div class="thumb">
        <div>
            <span class="image" style="background-image: url(<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext, true, true); ?>);">
                <a class="lightbox" href="<?php echo $thumbnail['fullpath']; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-overlay.png" alt="" /></a>
            </span>
        </div>
        <span class="shadow"></span>
        <span class="readmore"><a href="<?php the_permalink(); ?>"><?php _e('read more','SimplePress'); ?></a></span>
    </div>
</div><!-- .post -->