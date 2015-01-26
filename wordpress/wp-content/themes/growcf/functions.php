<?php

/* Add theme styling and scripts. */
function gcf_add_styles() {
	wp_register_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'main-css' );
}

add_action( 'wp_enqueue_scripts', 'gcf_add_styles' );