<?php get_header(); ?>

<div id="description">
	<h2><?php echo get_option(THEME_PREFIX . "intro_title"); ?></h2>
	<p><?php echo get_option(THEME_PREFIX . "intro_text"); ?></p>
</div>

<div id="twitter">
	<a class="twitter" href="http://www.twitter.com/<?php echo get_option(THEME_PREFIX . "twitter_name"); ?>" target="_blank" title="Follow">@<?php echo get_option(THEME_PREFIX . "twitter_name"); ?></a>
</div>

<?php get_footer(); ?>