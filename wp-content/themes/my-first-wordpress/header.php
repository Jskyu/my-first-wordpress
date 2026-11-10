<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Preconnect to external domains for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip to main content for accessibility -->
<a class="skip-link screen-reader-text" href="#main-content">
    <?php _e('Skip to content', 'my-first-wordpress'); ?>
</a>

<header class="site-header" role="banner">
    <div class="header-container">
        <!-- Site Branding -->
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php endif; ?>

            <?php if (is_front_page() && is_home()) : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php else : ?>
                <p class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name'); ?>
                    </a>
                </p>
            <?php endif; ?>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php _e('Toggle navigation', 'my-first-wordpress'); ?>">
            <span class="menu-icon">☰</span>
        </button>

        <!-- Primary Navigation - 단순화된 네비게이션 -->
        <nav class="main-navigation" id="primary-menu" role="navigation" aria-label="<?php _e('Primary Navigation', 'my-first-wordpress'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => 'mytheme_default_menu',
            ));
            ?>
        </nav>
    </div>
</header>

<main id="main-content" class="site-main" role="main">
<?php

// Default menu fallback
function mytheme_default_menu() {
    echo '<ul id="primary-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'my-first-wordpress') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">' . __('About', 'my-first-wordpress') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/products')) . '">' . __('Products', 'my-first-wordpress') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . __('Contact', 'my-first-wordpress') . '</a></li>';
    echo '</ul>';
}
