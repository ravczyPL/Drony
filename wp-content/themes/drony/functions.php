<?php
// Funkcja dodająca wsparcie dla motywu
function my_theme_setup() {
    // Włączanie obsługi tytułu strony
    add_theme_support( 'title-tag' );
    
    // Rejestracja menu
    register_nav_menus( array(
        'primary' => 'Menu główne',
    ));
}

add_action( 'after_setup_theme', 'my_theme_setup' );

// Funkcja do ładowania stylów i skryptów
function my_theme_enqueue_styles() {
    // Ładowanie głównego pliku CSS
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Rejestracja widgetów
function my_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Stopka',
        'id'            => 'footer-widget-area',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

add_action( 'widgets_init', 'my_theme_widgets_init' );
