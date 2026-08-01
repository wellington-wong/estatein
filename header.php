<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class('bg-black text-white'); ?>>

<?php wp_body_open(); ?>

<header class="border-b border-zinc-800">

    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

        <a href="<?php echo esc_url(home_url('/')); ?>"
           class="text-2xl font-bold">

            <?php
            if (has_custom_logo()) {

                the_custom_logo();

            } else {

                bloginfo('name');

            }
            ?>

        </a>

        <?php

        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex gap-6'
        ]);

        ?>

    </div>

</header>