<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1>The ring Torrevieja</h1>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => false,
                'menu_class' => 'menu',
            ));
            ?>
        </nav>
    </header>
