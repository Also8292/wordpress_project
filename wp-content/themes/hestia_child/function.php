<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



function produit_function( $atts ) {
    return "prod = {$atts['prod']}";
    // echo 'Hello';
}
add_shortcode( 'produits', 'produit_function' );




?>