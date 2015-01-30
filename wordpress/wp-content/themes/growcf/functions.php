<?php

/* Add theme styling and scripts. */
function gcf_add_styles() {
	wp_register_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css' );
//	wp_enqueue_style( 'bootstrap-css' );
	wp_register_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'main-css' );
	wp_register_style('dancing-script-font', 'http://fonts.googleapis.com/css?family=Dancing+Script:700' );
	wp_enqueue_style( 'dancing-script-font' );
	wp_register_style('open-sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' );
	wp_enqueue_style( 'open-sans-font' );
}

add_action( 'wp_enqueue_scripts', 'gcf_add_styles' );