<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </a>
        <nav class="site-header__nav" aria-label="Primary">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>
        <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get a Free Quote</a>
    </div>
</header>