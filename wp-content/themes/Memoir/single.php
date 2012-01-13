<?php the_post(); ?>
<?php get_header(); ?>
	<div id="main-area">		
		<?php if (get_option('memoir_integration_single_top') <> '' && get_option('memoir_integrate_singletop_enable') == 'on') echo(get_option('memoir_integration_single_top')); ?>
	
		<div class="entry clearfix post">
			<h1 class="title"><?php the_title(); ?></h1>
			
			<?php $thumb = '';
			$width = 135;
			$height = 135;
			$classtext = '';
			$titletext = get_the_title();
			$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext,false,'Entry');
			$thumb = $thumbnail["thumb"]; ?>
			
			<?php if($thumb <> '' && get_option('memoir_thumbnails') == 'on') { ?>
				<div class="post-thumbnail alignleft">
					<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
					<span class="post-overlay"></span>
				</div> 	<!-- end .post-thumbnail -->
			<?php } ?>
			
			<?php 
				echo apply_filters('the_content',et_create_dropcaps(get_the_content()));
			?>
			<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','Memoir').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php edit_post_link(__('Edit this page','Memoir')); ?>
						
			<?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
		</div> <!-- end .entry -->
		
		<?php if (get_option('memoir_integration_single_bottom') <> '' && get_option('memoir_integrate_singlebottom_enable') == 'on') echo(get_option('memoir_integration_single_bottom')); ?>
				
		<?php if (get_option('memoir_468_enable') == 'on') { ?>
			<?php if(get_option('memoir_468_adsense') <> '') echo(get_option('memoir_468_adsense'));
			else { ?>
				<a href="<?php echo(get_option('memoir_468_url')); ?>"><img src="<?php echo(get_option('memoir_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
			<?php } ?>	
		<?php } ?>
		
		<?php if (get_option('memoir_show_postcomments') == 'on') comments_template('', true); ?>
		
	</div> <!-- end #main-area -->
	<?php get_sidebar(); ?>
<?php get_footer(); ?>