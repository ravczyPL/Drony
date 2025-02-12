<?php
function modern_theme_setup() {
    // Obsługa tytułu i logo
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    
    // Rejestracja menu
    register_nav_menus( array(
        'primary' => __( 'Menu główne', 'modern_theme' ),
    ) );
    
    // Wsparcie dla HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'modern_theme_setup' );

function modern_theme_enqueue_assets() {
    // Ładowanie głównego pliku CSS
    wp_enqueue_style( 'modern-theme-style', get_stylesheet_uri(), array(), '1.0' );
    
    // Możesz dodać tu dodatkowe skrypty lub style
}
add_action( 'wp_enqueue_scripts', 'modern_theme_enqueue_assets' );
