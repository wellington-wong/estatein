<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class('bg-panel text-white'); ?>>

<?php wp_body_open(); ?>

  <!-- Announcement bar -->
  <div class="bg-panel border-b border-line hidden" id="top-announcement">
    <div class="mx-auto max-w-7xl px-4 py-2.5 flex items-center justify-center gap-2 text-sm text-gray-300 relative">
      <span aria-hidden="true" class="text-brand">✦</span>
      <span>Discover Your Dream Property with Estatein</span>
      <a href="#" class="underline underline-offset-4 hover:text-white">Learn More</a>
      <button aria-label="Dismiss announcement" class="absolute right-4 text-gray-500 hover:text-white">✕</button>
    </div>
  </div>

  <!-- Header -->
  <header class="border-b border-line">
    <div class="mx-auto max-w-7xl px-4 py-4 flex items-center justify-between">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="flex items-center gap-2 font-semibold text-lg">
        <span class="grid place-items-center h-8 w-8 rounded-md">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
        </span>
        Estatein
      </a>
      <nav aria-label="Primary" class="hidden md:flex items-center gap-1 rounded-full border border-line bg-panel px-2 py-1">
        <?php
        wp_nav_menu([
            'menu' => 'Menu 1',
            'container'      => false,
            'items_wrap'     => '%3$s',   // strips outer <ul> too
            'walker'         => new Estatein_Clean_Walker(),
            'fallback_cb'    => false,
        ]);
        ?>
      </nav>
      <a href="<?php echo esc_url( home_url('/contact-us') ); ?>" class="rounded-lg border border-line bg-panel px-5 py-2.5 text-sm font-medium <?php echo (is_page('contact-us')?:"text-muted ") ?>hover:text-white">Contact Us</a>
    </div>
  </header>