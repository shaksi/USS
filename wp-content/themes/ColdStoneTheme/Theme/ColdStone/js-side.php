<!-- BEGIN SIDEBAR-ARCHIVE.PHP -->

<div class="side_box">
    <div class="menu tabbed">
        <ul class="tabs">
            <li class="t1"><a class="t1 tab" title="<?php _e('Latest Headlines','ColdStone'); ?>">
                <?php _e('Comments','ColdStone'); ?>
                </a></li>
            <li class="t3"><a class="t3 tab" title="<?php _e('Categories','ColdStone'); ?>">
                <?php _e('Recent','ColdStone'); ?>
                </a></li>
            <li class="t4"><a class="t4 tab" title="<?php _e('Archives','ColdStone'); ?>">
                <?php _e('Archives','ColdStone'); ?>
                </a></li>
        </ul>
        <!-- LATEST HEADLINES -->
        <div class="t1">
            <?php rewind_posts(); ?>
            <?php include (TEMPLATEPATH . '/simple_recent_comments.php'); /* recent comments plugin by: www.g-loaded.eu */ ?>
            <?php if (function_exists('src_simple_recent_comments')) { src_simple_recent_comments("4", 25, '', ''); } ?>
        </div>
        <!-- SECTIONS (CATEGORIES) -->
        <div class="t3">
            <ul id="latest">
                <?php $posts = get_posts('numberposts=4&offset=0'); foreach ($posts as $post): setup_postdata($post); ?>
                  <?php
$limit = 43;
$summary = get_the_title(); 

   if (strlen($summary) > $limit)
      $summary = substr($summary, 0, strrpos(substr($summary, 0, $limit), ' ')) . '...';
      
?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php echo $summary; ?>
                    </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- ARCHIVES -->
        <div class="t4">
            <ul id="archives">
                <?php wp_get_archives('type=monthly&limit=7'); ?>
            </ul>
        </div>
    </div>
    <!-- tabbed -->
</div>
<!-- END SIDEBAR-ARCHIVE.PHP -->
