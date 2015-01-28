<?php

function load_fonts() {
        wp_register_style('googleFontsPacifico', 'http://fonts.googleapis.com/css?family=Pacifico');
        wp_enqueue_style( 'googleFontsPacifico');
        wp_register_style('googleFontsOpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans');
        wp_enqueue_style( 'googleFontsOpenSans');
    }

add_action('wp_print_styles', 'load_fonts');

?>