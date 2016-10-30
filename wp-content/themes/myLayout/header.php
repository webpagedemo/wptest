<!DOCTYPE html>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/style.css" />
        <!--[if lte IE 8]><script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ie/html5shiv.js"></script><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css" /><![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <!-- Wrapper -->
        <div id="wrapper">

                <!-- Header -->
                <header id="header">
                        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php 
                            $defaultsMenuMain = array( 
                                'menu' => '', 
                                'container' => 'nav', 
                                'container_class' => 'links', 
                                'container_id' => '', 
                                'menu_class' => 'menu', 
                                'menu_id' => '',
                                'echo' => true, 
                                'fallback_cb' => 'wp_page_menu', 
                                'before' => '', 
                                'after' => '', 
                                'link_before' => '', 
                                'link_after' => '', 
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 0, 
                                'walker' => '', 
                                'theme_location' => 'main' );
                        
                        wp_nav_menu( $defaultsMenuMain ); ?>

                        <nav class="main">
                                <ul>
                                        <li class="search">
                                                <a class="fa-search" href="#search">Search</a>
                                                <form id="search" method="get" action="#">
                                                        <input type="text" name="query" placeholder="Search" />
                                                </form>
                                        </li>
                                </ul>
                        </nav>
                </header>

