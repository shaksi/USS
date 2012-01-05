<div class="footer">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
    <?php endif; ?>
    <div style="clear: both;"></div>
    <p><?php _e('Powered by ','ColdStone'); ?> <a href="http://www.wordpress.com">WordPress</a> | <?php _e('Designed by ','ColdStone'); ?> <a href="http://www.elegantthemes.com">Elegant Themes</a></p>
</div>
<!-- /footer -->
</div>
<!-- /wrapp_ -->

<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>
<?php wp_footer(); ?>
</body></html>