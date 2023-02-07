<?php


// Ajouter la prise en charge des images mises en avant
	add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
	add_theme_support( 'title-tag' );


// Ajouter des classes au body
	function my_plugin_body_class($classes) {
		$classes[] = 'h-full dark:bg-black';
		return $classes;
	}
	
	
	add_filter('body_class', 'my_plugin_body_class');

// Ajouter des font personnalisées
	function theme_add_google_fonts() {
		wp_enqueue_style( 'theme-google-fonts', 'https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700;800&display=swap', false );
	}
	add_action( 'wp_enqueue_scripts', 'theme_add_google_fonts' );

// Ajouter un emplacement de menu
	function theme_register_nav_menu(){
		register_nav_menus( array(
			'menu_principal' => __( 'Menu Principal', 'text_domain' ),
        ));
	}
	add_action( 'after_setup_theme', 'theme_register_nav_menu', 0 );
	
// Ajouter page d'options ACF

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}