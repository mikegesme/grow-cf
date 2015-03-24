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
	wp_enqueue_script('jquery');
//	wp_register_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js');
//	wp_enqueue_script( 'owl-carousel-min' );
	wp_register_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js');
	wp_enqueue_script( 'owl-carousel' );		
	wp_register_script( 'main-js', get_template_directory_uri() . '/js/main.js' , array( 'jquery' ), false, true);
	wp_enqueue_script( 'main-js' );
	wp_register_script( 'analytics-js', get_template_directory_uri() . '/js/google-tracking.js' , false, false, true);
	wp_enqueue_script( 'analytics-js' );
}

add_action( 'wp_enqueue_scripts', 'gcf_add_styles' );