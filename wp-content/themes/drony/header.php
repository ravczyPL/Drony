<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | Strona wizytówka</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Nagłówek -->
<header>
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="path-to-your-logo.png" alt="Logo">
        </a>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="<?php echo home_url(); ?>">Strona Główna</a></li>
            <li><a href="#services">Usługi</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </nav>
</header>
