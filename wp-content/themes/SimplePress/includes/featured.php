<?php global $ids;
	$ids = array();
	$arr = array();
	$i=1;
	
	$width = 954;
	$height = 375;
	$width_small = 83;
	$height_small = 83;
			
	$featured_cat = get_option('simplepress_feat_cat'); 
	$featured_num = get_option('simplepress_featured_num'); 
		
	if (get_option('simplepress_use_pages') == 'false') query_posts("showposts=$featured_num&cat=".get_catId($featured_cat));
	else {
		global $pages_number;
		
		if (get_option('simplepress_feat_pages') <> '') $featured_num = count(get_option('simplepress_feat_pages'));
		else $featured_num = $pages_number;
				
		query_posts(array('post_type' => 'page',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'post__in' => get_option('simplepress_feat_pages'),
						'showposts' => $featured_num));
	};
			
	while (have_posts()) : the_post();
		global $post;	
		$arr[$i]["title"] = truncate_title(35,false);
		$arr[$i]["fulltitle"] = truncate_title(35,false);
		
		$arr[$i]["excerpt"] = truncate_post(400,false);
		$arr[$i]["excerpt_small"] = truncate_post(80,false);
		
		$arr[$i]["permalink"] = get_permalink();
				
		$arr[$i]["thumbnail"] = get_thumbnail($width,$height,'',$arr[$i]["fulltitle"],$arr[$i]["fulltitle"]);
		$arr[$i]["thumb"] = $arr[$i]["thumbnail"]["thumb"];
		
		$arr[$i]["thumbnail_small"] = get_thumbnail($width_small,$height_small,'',$arr[$i]["fulltitle"],$arr[$i]["fulltitle"]);
		$arr[$i]["thumb_small"] = $arr[$i]["thumbnail_small"]["thumb"];
		
		$arr[$i]["use_timthumb"] = $arr[$i]["thumbnail"]["use_timthumb"];

		$i++;
		$ids[] = $post->ID;
	endwhile; wp_reset_query();	?>
    
  <div id="featured">
   	<div id="slides">
    	<?php for ($i = 1; $i <= $featured_num; $i++) { ?>
        <div class="slide <?php if($i == 1) echo('active'); ?>">
            <div class="slider_image" style="background-image: url(<?php print_thumbnail($arr[$i]["thumb"], $arr[$i]["use_timthumb"], $arr[$i]["fulltitle"], $width, $height, '', true, true); ?>);">
            <img src="<?php bloginfo('template_directory'); ?>/images/slider-overlay.png" alt="" />
            </div>

        </div><!-- .slide -->
        <?php }; ?>
      </div><!-- #slides --> 
      <span class="slider_shadow"></span>
      <div id="switcher"> 
      	  <?php for ($i = 1; $i <= $featured_num; $i++) { ?>
       	  <div class="item">
              <div class="wrap <?php if($i == 1) echo('active'); ?>">
               	  <span class="image" style="background-image: url(<?php print_thumbnail($arr[$i]["thumb_small"], $arr[$i]["use_timthumb"], $arr[$i]["fulltitle"], $width_small, $height_small, '', true, true); ?>);"><img src="<?php bloginfo('template_directory'); ?>/images/slider-thumb-overlay.png" alt="" /></span>
                  <div class="hover">
                      <span><?php echo($arr[$i]["fulltitle"]); ?></span>
                      <br class="clear" />
                      <?php echo($arr[$i]["excerpt_small"]); ?>
                  </div>
              </div>
          </div>
          <?php }; ?>
      </div><!-- #switcher --> 
    </div><!-- end #featured --> 