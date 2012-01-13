body {
background:<?php if (get_option(THEME_PREFIX . "background_color")) { ?> #<?php echo get_option(THEME_PREFIX . "background_color"); ?><?php } ?><?php if (get_option(THEME_PREFIX . "background_img")) { ?> url(<?php echo get_option(THEME_PREFIX . "background_img"); ?>) <?php echo get_option(THEME_PREFIX . "background_vert"); ?> <?php echo get_option(THEME_PREFIX . "background_horiz"); ?> <?php echo get_option(THEME_PREFIX . "background_repeat"); ?><?php if (get_option(THEME_PREFIX . "background_fixed")) { ?> fixed<?php } ?><?php } ?>;
color: <?php if (get_option(THEME_PREFIX . "content_text_color")) { ?>#<?php echo get_option(THEME_PREFIX . "content_text_color"); ?><?php } ?>;
}

a:link, a:visited {
color: <?php if (get_option(THEME_PREFIX . "link_color")) { ?>#<?php echo get_option(THEME_PREFIX . "link_color"); ?><?php } ?>;
}