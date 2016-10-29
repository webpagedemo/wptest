<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage My Layout
 * @since My Layout 1.0
 */

/**
 * Function list
 * bloginfo($param) - funkcja dająca dostęp do następujacych elementów strony ( Ustawienia -> Ogólne )
 *  name - Tytuł witryny
 *  description - opis blogu
 *  wpurl - Adres WordPressa (URL)
 *  url - Adres witryny wordpressa
 *  admin_email - Adres email 
 *  charset - kodowanie domyśnie utf8
 *  version - wersja silnika wp
 *  html_type - typ nagłówka meta (text/html)
 *  text_direction - kierunek tekstu
 *  language - język ( pl-PL )
 *  stylesheet_url - domyślny plik ze stylami dla aktywnego layoutu
 *  stylesheet_directory - domyślna ścieżka do pliku ze stylami dla aktywnego layoutu
 *  template_url - j.w.
 *  pingback_url - link do XML-RPC - potrzebny do określenia czy nasz post został gdzieś wyświetlony na zewnętrznym serwisie wp
 *  atom_url - link do kanału informacyjnego zamianst (rrs)
 *  rdf_url - link do kanału informacyjnego ( rdf - rozszerzenie rrs )
 *  rss_url - link do kanału informacyjnego (  rrs ver 1.0 )
 *  rss2_url - link do kanału informacyjnego ( rrs ver 2.0 )
 *  comments_atom_url - link do comentarzy do atoma
 *  comments_rss2_url - link do comentarzy rss 2.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
        bloginfo('name'); ?> - name<br><?php
        bloginfo('description');?> - description<br><?php
        bloginfo('wpurl');?> - wpurl<br><?php
        bloginfo('url');?> - url<br><?php
        bloginfo('admin_email');?> - admin_email<br><?php
        bloginfo('charset');?> - charset<br><?php
        bloginfo('version');?> - version<br><?php
        bloginfo('html_type');?> - html_type<br><?php
        bloginfo('text_direction');?> - text_direction<br><?php
        bloginfo('language');?> - language<br><?php
        bloginfo('stylesheet_url');?> - stylesheet_url<br><?php
        bloginfo('stylesheet_directory');?> - stylesheet_directory<br><?php
        bloginfo('template_url');?> - template_url<br><?php
        bloginfo('template_directory');?> - template_directory<br><?php
        bloginfo('pingback_url');?> - pingback_url<br><?php
        bloginfo('atom_url');?> - atom_url<br><?php
        bloginfo('rdf_url');?> - rdf_url<br><?php
        bloginfo('rss_url');?> - rss_url<br><?php
        bloginfo('rss2_url');?> - rss2_url<br><?php
        bloginfo('comments_atom_url');?> - comments_atom_url<br><?php
        bloginfo('comments_rss2_url');?> - comments_rss2_url<br><?php
        bloginfo('siteurl');?> - siteurl<br><?php
        bloginfo('home');?> - home<br>
        
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
