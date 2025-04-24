<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<style>
.boxeo {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/boxeo.jpg');
    height: 300px;
    background-size: cover;
    background-position: center;
}
.kickboxing {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/kickboxing.avif');
    height: 300px;
    background-size: cover;
    background-position: center;
}
.muaythai {
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/muaythai.jpg');
    height: 300px;
    background-size: cover;
    background-position: center;
}
</style>

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
