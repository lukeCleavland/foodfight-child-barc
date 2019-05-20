<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', '', '1.13' );
wp_enqueue_style( 'nimbus-font', 'https://use.typekit.net/emx0exo.css', '', '1.0' );
}

?>