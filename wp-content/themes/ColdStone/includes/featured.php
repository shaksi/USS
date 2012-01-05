<div class="feature_wrap">
    <?php $loopcounter = 0; ?>
    <!-- DEL ME -->
    <div class="tabs">
	<?php $feat_cat = get_catId(get_option('coldstone_feat_cat')); 
$ids = array(); ?>
        <?php $my_query = new WP_Query("showposts=$coldstone_featured_number&cat=$feat_cat&order=DESC");
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $loopcounter++; ?>
        <div id="tab<?php echo $loopcounter; ?>">
            
			<?php $width = 883;
				  $height = 250;
						  
				  $classtext = 'featured_thumbnail';
				  $titletext = get_the_title();

				  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Featured');
				  $thumb = $thumbnail["thumb"];  ?>
			
            <div class="moduletable">
                <div class="feature_slide">
					<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
                    <?php include(TEMPLATEPATH . '/includes/featurednav-' . $coldstone_featured_number . '.php'); ?>
                </div>
                <div class="feat_post">
                    <h2><span><?php echo $loopcounter; ?>. </span><a href="<?php the_permalink(); ?>"><?php truncate_title(25); ?></a></h2>
                    <?php truncate_post(240); ?>
                    <div class="keepreading"> <a href="<?php the_permalink(); ?>"><?php _e('Continue Reading','ColdStone') ?></a> </div>
                </div>
                <!-- /feat_post -->
            </div>
        </div>
		<?php $ids[]= $post->ID; ?>
        <?php endwhile;?>
    </div>
    <!-- /DEL ME -->
    <div class="feature_content">
        <div class="feature_widget">
            <?php if (get_option('coldstone_ads') == 'on') { include(TEMPLATEPATH . '/includes/ads.php'); } ?>
            <!-- /adverts -->
        </div>
        <!-- /feature_widget -->
    </div>
    <!-- /feature_content -->
    <div style="clear: both;"></div>
</div>
<!-- /feature_wrap -->
