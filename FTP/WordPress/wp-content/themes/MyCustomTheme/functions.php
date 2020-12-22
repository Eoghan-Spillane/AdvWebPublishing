<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}


function wpb_add_google_fonts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Langar&display=swap', false );
}

function setup_sidebars() {
	register_sidebar(
		array(
			'id' => 'one',
			'name' => __( 'Sidebar One' ),
			'description' => __( 'First Column' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'id' => 'two',
			'name' => __( 'Sidebar Two' ),
			'description' => __( 'Second Column.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets');
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
add_action( 'widgets_init','setup_sidebars' );
register_nav_menus(['primary' => _('Primary Menu')]);