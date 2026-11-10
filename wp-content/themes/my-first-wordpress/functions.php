<?php
/**
 * My First WordPress Theme Functions
 * 성능 최적화 및 SEO 개선이 적용된 테마
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Theme Setup
function mytheme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);

    // Add custom image sizes
    add_image_size('mytheme-featured', 800, 450, true);
    add_image_size('mytheme-thumbnail', 400, 300, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-first-wordpress'),
        'footer'  => __('Footer Menu', 'my-first-wordpress'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue Scripts and Styles - 성능 최적화: 필요한 것만 로드
function mytheme_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Main JavaScript (defer loading)
    wp_enqueue_script(
        'mytheme-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true // Load in footer
    );

    // Add async/defer to scripts
    add_filter('script_loader_tag', 'mytheme_add_async_defer', 10, 2);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');

// Add async and defer attributes to enqueued scripts
function mytheme_add_async_defer($tag, $handle) {
    if ('mytheme-scripts' === $handle) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}

// Register Widget Areas
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'my-first-wordpress'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'my-first-wordpress'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 1', 'my-first-wordpress'),
        'id'            => 'footer-1',
        'description'   => __('Footer widget area 1', 'my-first-wordpress'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 2', 'my-first-wordpress'),
        'id'            => 'footer-2',
        'description'   => __('Footer widget area 2', 'my-first-wordpress'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer 3', 'my-first-wordpress'),
        'id'            => 'footer-3',
        'description'   => __('Footer widget area 3', 'my-first-wordpress'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');

// SEO 최적화: Open Graph 메타 태그 추가
function mytheme_add_og_tags() {
    if (is_single() || is_page()) {
        global $post;

        $og_title = get_the_title();
        $og_description = get_the_excerpt() ? get_the_excerpt() : get_bloginfo('description');
        $og_url = get_permalink();
        $og_image = get_the_post_thumbnail_url($post->ID, 'large') ?: get_site_icon_url();

        echo '<meta property="og:type" content="website" />' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($og_title) . '" />' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($og_description) . '" />' . "\n";
        echo '<meta property="og:url" content="' . esc_url($og_url) . '" />' . "\n";

        if ($og_image) {
            echo '<meta property="og:image" content="' . esc_url($og_image) . '" />' . "\n";
        }

        // Twitter Card
        echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($og_title) . '" />' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($og_description) . '" />' . "\n";
    }
}
add_action('wp_head', 'mytheme_add_og_tags');

// 성능 최적화: 이미지 지연 로딩
function mytheme_add_lazy_loading($content) {
    if (is_feed() || is_admin()) {
        return $content;
    }

    $content = preg_replace(
        '/<img(.*?)src=/i',
        '<img$1loading="lazy" src=',
        $content
    );

    return $content;
}
add_filter('the_content', 'mytheme_add_lazy_loading');

// Schema.org 구조화된 데이터 추가
function mytheme_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'logo' => get_site_icon_url(),
            'description' => get_bloginfo('description'),
            'sameAs' => array(
                // 소셜 미디어 링크 추가 가능
            )
        );

        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'mytheme_add_schema_markup');

// 성능 최적화: Emoji 스크립트 제거
function mytheme_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'mytheme_disable_emojis');

// 성능 최적화: jQuery를 footer로 이동
function mytheme_move_scripts_to_footer() {
    if (!is_admin()) {
        wp_scripts()->add_data('jquery', 'group', 1);
        wp_scripts()->add_data('jquery-core', 'group', 1);
        wp_scripts()->add_data('jquery-migrate', 'group', 1);
    }
}
add_action('wp_enqueue_scripts', 'mytheme_move_scripts_to_footer');

// Custom Excerpt Length
function mytheme_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'mytheme_excerpt_length');

// Custom Excerpt More
function mytheme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'mytheme_excerpt_more');

// Add theme customizer options
function mytheme_customize_register($wp_customize) {
    // Add Contact Info Section
    $wp_customize->add_section('mytheme_contact_info', array(
        'title'    => __('Contact Information', 'my-first-wordpress'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('mytheme_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('mytheme_phone', array(
        'label'    => __('Phone Number', 'my-first-wordpress'),
        'section'  => 'mytheme_contact_info',
        'type'     => 'text',
    ));

    // Email Address
    $wp_customize->add_setting('mytheme_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('mytheme_email', array(
        'label'    => __('Email Address', 'my-first-wordpress'),
        'section'  => 'mytheme_contact_info',
        'type'     => 'email',
    ));
}
add_action('customize_register', 'mytheme_customize_register');

// Security: Remove WordPress version from header
remove_action('wp_head', 'wp_generator');

// Security: Hide login errors
function mytheme_hide_login_errors() {
    return __('Login failed. Please try again.', 'my-first-wordpress');
}
add_filter('login_errors', 'mytheme_hide_login_errors');

// Performance: Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Performance: Remove query strings from static resources
function mytheme_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'mytheme_remove_query_strings', 10, 2);
add_filter('script_loader_src', 'mytheme_remove_query_strings', 10, 2);

// Add preconnect for Google Fonts (if used)
function mytheme_add_resource_hints($hints, $relation_type) {
    if ('preconnect' === $relation_type) {
        $hints[] = array(
            'href'        => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $hints[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $hints;
}
add_filter('wp_resource_hints', 'mytheme_add_resource_hints', 10, 2);
