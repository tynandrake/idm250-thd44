<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tynan Drake | Portfolio</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <div>
    </div>

    <div class="header-container">
        <a href="<?php echo home_url(); ?>" class="header-logo">
            <img src="<?php echo get_template_directory_uri() ?>/dist/images/logo.svg" alt="logo image">
        </a>
        <?php
        wp_nav_menu(
            [
                'theme_location' => 'primary_menu'
            ]
        );
        ?>
        <div class="header-search-container">
            <?php get_template_part('components/search-form') ?>
        </div>
    </div>