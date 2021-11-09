<!DOCTYPE html>
<head>
    <title>Incident</title>
    <meta charset='UTF-8' >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class='hide-mobile desktop-main'>
        <nav class='nav-container'>
            <div class='simplified-logo-wrapper'>
                <img class='simplified-logo' src='<?php the_field('simplified_logo', 'option') ?>' alt=''>
            </div>
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'header-menu', 
                    'container_class' => 'header-main-navigation' ) ); 
            ?>
        </nav>
    </header>
    <header class='mobile-show mobile-main'>
        <div class='topbar-menu'>
            <div class='hamburger-button-wrapper'>
                <button class='hamburger-button'></button>
            </div>
            <div class='simplified-logo-wrapper'>
                <img class='simplified-logo' src='<?php the_field('logo', 'option') ?>' alt=''>
            </div>
        </div>
        <nav class='nav-container' style='display:none'>
            <div class='close-mobile-menu-wrapper'>
                <button class='close-mobile-menu'></button>
            </div>
            <div class='simplified-logo-wrapper'>
                <img class='simplified-logo' src='<?php the_field('logo', 'option') ?>' alt=''>
            </div>
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'header-menu', 
                    'container_class' => 'header-main-navigation' ) ); 
            ?>
        </nav>
    </header>