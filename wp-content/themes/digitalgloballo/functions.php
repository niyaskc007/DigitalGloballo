<?php
/**
 * Digital Globallo Theme Functions
 *
 * @package DigitalGloballo
 * @version 1.1.0
 */

if (!defined('ABSPATH'))
    exit;

// Theme version constant — bump on every release
define('DG_THEME_VERSION', '1.1.0');

/* ============================================
   THEME SETUP
   ============================================ */
function digitalgloballo_setup()
{
    // Add title tag support
    add_theme_support('title-tag');

    // Post thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('blog-card', 600, 400, true);
    add_image_size('case-study', 800, 600, true);
    add_image_size('team-member', 400, 480, true);

    // HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Custom logo
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'digitalgloballo'),
        'footer' => __('Footer Menu', 'digitalgloballo'),
    ));
}
add_action('after_setup_theme', 'digitalgloballo_setup');

/* ============================================
   ENQUEUE STYLES & SCRIPTS
   ============================================ */
function digitalgloballo_scripts()
{
    // Use file modification time as version for automatic cache busting
    $css_version = filemtime(get_stylesheet_directory() . '/style.css');
    $js_version = filemtime(get_stylesheet_directory() . '/js/main.js');

    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'digitalgloballo-style',
        get_stylesheet_uri(),
        array('google-fonts'),
        $css_version
    );

    // Main JS
    wp_enqueue_script(
        'digitalgloballo-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        $js_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'digitalgloballo_scripts');

/* ============================================
   REGISTER WIDGET AREAS
   ============================================ */
function digitalgloballo_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'digitalgloballo'),
        'id' => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'digitalgloballo'),
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'digitalgloballo_widgets_init');

/* ============================================
   CUSTOMIZER SETTINGS
   ============================================ */
function digitalgloballo_customize_register($wp_customize)
{
    // Company Info Section
    $wp_customize->add_section('company_info', array(
        'title' => __('Company Information', 'digitalgloballo'),
        'priority' => 30,
    ));

    // Company tagline
    $wp_customize->add_setting('company_tagline', array(
        'default' => 'Strategize. Optimize. Succeed.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_tagline', array(
        'label' => __('Company Tagline', 'digitalgloballo'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('company_email', array(
        'default' => 'hello@digitalgloballo.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('company_email', array(
        'label' => __('Company Email', 'digitalgloballo'),
        'section' => 'company_info',
        'type' => 'email',
    ));

    // Phone
    $wp_customize->add_setting('company_phone', array(
        'default' => '+971 XX XXX XXXX',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_phone', array(
        'label' => __('Company Phone', 'digitalgloballo'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    // Address
    $wp_customize->add_setting('company_address', array(
        'default' => 'UAE & India',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('company_address', array(
        'label' => __('Company Address', 'digitalgloballo'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    // Social Links Section
    $wp_customize->add_section('social_links', array(
        'title' => __('Social Media Links', 'digitalgloballo'),
        'priority' => 35,
    ));

    $socials = array('facebook', 'instagram', 'linkedin', 'twitter', 'youtube', 'tiktok');
    foreach ($socials as $social) {
        $wp_customize->add_setting("social_{$social}", array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("social_{$social}", array(
            'label' => ucfirst($social) . ' URL',
            'section' => 'social_links',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'digitalgloballo_customize_register');

/* ============================================
   HELPER FUNCTIONS
   ============================================ */

/**
 * Get social media links as an array
 */
function digitalgloballo_get_socials()
{
    $socials = array('facebook', 'instagram', 'linkedin', 'twitter', 'youtube', 'tiktok');
    $links = array();
    foreach ($socials as $social) {
        $url = get_theme_mod("social_{$social}", '#');
        if ($url && $url !== '#') {
            $links[$social] = $url;
        }
    }
    return $links;
}

/**
 * SVG icon helper
 */
function digitalgloballo_icon($name)
{
    $icons = array(
        'search' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
        'check' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>',
        'star' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        'mail' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'phone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'map-pin' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'globe' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'trending-up' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
        'users' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'target' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
        'bar-chart' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg>',
        'megaphone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>',
        'code' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
        'edit' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>',
        'layout' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>',
        'facebook' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
        'instagram' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
        'linkedin' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>',
        'twitter' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
        'youtube' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 4-8 4z"/></svg>',
        'tiktok' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1 0-5.78 2.92 2.92 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 3 15.57 6.33 6.33 0 0 0 9.37 22a6.33 6.33 0 0 0 6.33-6.33V9.29a8.16 8.16 0 0 0 4.3 1.24V7.1a4.79 4.79 0 0 1-.41-.41z"/></svg>',
        'heart' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
        'award' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>',
        'zap' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
        'shield' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    );

    return isset($icons[$name]) ? $icons[$name] : '';
}

/* ============================================
   EXCERPT LENGTH
   ============================================ */
function digitalgloballo_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'digitalgloballo_excerpt_length', 999);

function digitalgloballo_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'digitalgloballo_excerpt_more');

/* ============================================
   BODY CLASSES
   ============================================ */
function digitalgloballo_body_classes($classes)
{
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }
    return $classes;
}
add_filter('body_class', 'digitalgloballo_body_classes');

/* ============================================
   CUSTOM POST TYPES
   ============================================ */
function digitalgloballo_register_post_types()
{

    // SERVICES CPT
    register_post_type('dg_service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'menu_name' => 'Services',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-chart-bar',
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'service'),
        'show_in_rest' => true,
    ));

    // TESTIMONIALS CPT
    register_post_type('dg_testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonials',
            'menu_name' => 'Testimonials',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-format-quote',
        'menu_position' => 6,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));

    // CASE STUDIES CPT
    register_post_type('dg_case_study', array(
        'labels' => array(
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new' => 'Add New Case Study',
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'all_items' => 'All Case Studies',
            'menu_name' => 'Case Studies',
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-portfolio',
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'case-study'),
        'show_in_rest' => true,
    ));

    // TEAM MEMBERS CPT
    register_post_type('dg_team', array(
        'labels' => array(
            'name' => 'Team Members',
            'singular_name' => 'Team Member',
            'add_new' => 'Add New Member',
            'add_new_item' => 'Add New Member',
            'edit_item' => 'Edit Team Member',
            'all_items' => 'All Members',
            'menu_name' => 'Team',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 8,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'digitalgloballo_register_post_types');

/* ============================================
   CUSTOM META BOXES (no ACF needed)
   ============================================ */
function digitalgloballo_add_meta_boxes()
{

    // Service meta: icon name, features list, link
    add_meta_box('dg_service_meta', 'Service Details', 'digitalgloballo_service_meta_cb', 'dg_service', 'normal', 'high');

    // Testimonial meta: client name, role, company, rating
    add_meta_box('dg_testimonial_meta', 'Testimonial Details', 'digitalgloballo_testimonial_meta_cb', 'dg_testimonial', 'normal', 'high');

    // Case Study meta: category tag, result headline
    add_meta_box('dg_case_meta', 'Case Study Details', 'digitalgloballo_case_meta_cb', 'dg_case_study', 'normal', 'high');

    // Team meta: job title, LinkedIn URL
    add_meta_box('dg_team_meta', 'Team Member Details', 'digitalgloballo_team_meta_cb', 'dg_team', 'normal', 'high');
}
add_action('add_meta_boxes', 'digitalgloballo_add_meta_boxes');

function digitalgloballo_service_meta_cb($post)
{
    $icon = get_post_meta($post->ID, '_dg_service_icon', true) ?: 'search';
    $order = get_post_meta($post->ID, '_dg_service_order', true) ?: '01';
    wp_nonce_field('dg_meta_nonce', 'dg_nonce');
    echo '<p><label><strong>Icon Name</strong> (search, users, target, edit, layout, bar-chart, trending-up, globe)<br>';
    echo '<input type="text" name="dg_service_icon" value="' . esc_attr($icon) . '" style="width:100%"></label></p>';
    echo '<p><label><strong>Display Order</strong> (e.g. 01, 02 ...)<br>';
    echo '<input type="text" name="dg_service_order" value="' . esc_attr($order) . '" style="width:100px"></label></p>';
}

function digitalgloballo_testimonial_meta_cb($post)
{
    $client = get_post_meta($post->ID, '_dg_client_name', true);
    $role = get_post_meta($post->ID, '_dg_client_role', true);
    $rating = get_post_meta($post->ID, '_dg_rating', true) ?: '5';
    echo '<p><label><strong>Client Name</strong><br><input type="text" name="dg_client_name" value="' . esc_attr($client) . '" style="width:100%"></label></p>';
    echo '<p><label><strong>Job Title &amp; Company</strong> (e.g. CEO, TechStart MENA)<br><input type="text" name="dg_client_role" value="' . esc_attr($role) . '" style="width:100%"></label></p>';
    echo '<p><label><strong>Star Rating</strong> (1-5)<br><input type="number" name="dg_rating" value="' . esc_attr($rating) . '" min="1" max="5" style="width:80px"></label></p>';
}

function digitalgloballo_case_meta_cb($post)
{
    $category = get_post_meta($post->ID, '_dg_case_category', true);
    $result = get_post_meta($post->ID, '_dg_case_result', true);
    echo '<p><label><strong>Category Label</strong> (e.g. SEO + PPC)<br><input type="text" name="dg_case_category" value="' . esc_attr($category) . '" style="width:100%"></label></p>';
    echo '<p><label><strong>Result Headline</strong> (e.g. +280% organic traffic in 6 months)<br><input type="text" name="dg_case_result" value="' . esc_attr($result) . '" style="width:100%"></label></p>';
}

function digitalgloballo_team_meta_cb($post)
{
    $role = get_post_meta($post->ID, '_dg_team_role', true);
    $linkedin = get_post_meta($post->ID, '_dg_linkedin', true);
    $initials = get_post_meta($post->ID, '_dg_team_initials', true);
    echo '<p><label><strong>Job Title</strong> (e.g. SEO Lead)<br><input type="text" name="dg_team_role" value="' . esc_attr($role) . '" style="width:100%"></label></p>';
    echo '<p><label><strong>Initials</strong> (shown if no photo, e.g. AK)<br><input type="text" name="dg_team_initials" value="' . esc_attr($initials) . '" style="width:80px" maxlength="3"></label></p>';
    echo '<p><label><strong>LinkedIn URL</strong><br><input type="url" name="dg_linkedin" value="' . esc_attr($linkedin) . '" style="width:100%"></label></p>';
}

/* ============================================
   SAVE META BOXES
   ============================================ */
function digitalgloballo_save_meta($post_id)
{
    if (!isset($_POST['dg_nonce']) || !wp_verify_nonce($_POST['dg_nonce'], 'dg_meta_nonce'))
        return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
    if (!current_user_can('edit_post', $post_id))
        return;

    $fields = array(
        'dg_service_icon' => '_dg_service_icon',
        'dg_service_order' => '_dg_service_order',
        'dg_client_name' => '_dg_client_name',
        'dg_client_role' => '_dg_client_role',
        'dg_rating' => '_dg_rating',
        'dg_case_category' => '_dg_case_category',
        'dg_case_result' => '_dg_case_result',
        'dg_team_role' => '_dg_team_role',
        'dg_team_initials' => '_dg_team_initials',
        'dg_linkedin' => '_dg_linkedin',
    );
    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'digitalgloballo_save_meta');

/* ============================================
   HERO CUSTOMIZER FIELDS
   ============================================ */
function digitalgloballo_hero_customizer($wp_customize)
{
    $wp_customize->add_section('dg_hero', array(
        'title' => 'Hero Section',
        'priority' => 25,
    ));

    $hero_fields = array(
        'hero_badge' => array('Hero Badge Text', 'Global Digital Marketing Agency'),
        'hero_heading' => array('Hero Heading', 'We Help Brands <span class="highlight">Dominate</span> The Digital World'),
        'hero_subtext' => array('Hero Sub-text', 'From SEO and social media to high-converting ad campaigns — Digital Globallo delivers data-driven strategies that fuel growth.'),
        'hero_cta1' => array('CTA Button 1 Text', 'Get Free Consultation'),
        'hero_cta2' => array('CTA Button 2 Text', 'Our Services'),
        'hero_stat1_num' => array('Stat 1 Number', '400'),
        'hero_stat1_lbl' => array('Stat 1 Label', 'Satisfied Clients'),
        'hero_stat2_num' => array('Stat 2 Number', '450'),
        'hero_stat2_lbl' => array('Stat 2 Label', 'Projects Completed'),
        'hero_stat3_num' => array('Stat 3 Number', '7'),
        'hero_stat3_lbl' => array('Stat 3 Label', 'Years Experience'),
    );

    foreach ($hero_fields as $key => $val) {
        $wp_customize->add_setting("dg_{$key}", array(
            'default' => $val[1],
            'sanitize_callback' => 'wp_kses_post',
        ));
        $wp_customize->add_control("dg_{$key}", array(
            'label' => $val[0],
            'section' => 'dg_hero',
            'type' => strlen($val[1]) > 80 ? 'textarea' : 'text',
        ));
    }
}
add_action('customize_register', 'digitalgloballo_hero_customizer');

/* ============================================
   FLUSH REWRITE RULES ON ACTIVATION
   ============================================ */
function digitalgloballo_flush_rewrites()
{
    digitalgloballo_register_post_types();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'digitalgloballo_flush_rewrites');

