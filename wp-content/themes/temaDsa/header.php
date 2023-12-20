<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'menu-principal', 
        ));
        ?>
    </header>