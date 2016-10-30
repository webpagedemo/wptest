<?php

register_nav_menu( 'main', 'Menu główne' );

$args = array(
        'name' => __('sidebar'),
        'id' => "sidebar",
        'description' => '',
        'class' => '',
        'before_widget' => '<section class="blurb widget %2$s">',
        'after_widget' => "</section>\n",
        'before_title' => '<h2>',
        'after_title' => "</h2>\n",
    );

register_sidebar( $args );