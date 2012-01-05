<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name' => 'Main Sidebar',
    'before_widget' => '<div class="side_roll">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name' => 'Homepage Sidebar',
    'before_widget' => '',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="aboutustab">',
    'after_title' => '</h3> <div class="aboutus">',
    ));
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name' => 'Footer',
    'before_widget' => '<div class="footer-box">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
?>