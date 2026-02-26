<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Digital Globallo — A global digital marketing agency specializing in SEO, Social Media Marketing, PPC, Content Marketing, Web Design & Analytics.">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav" id="mobileNav">
        <a href="<?php echo home_url('/'); ?>">Home</a>
        <a href="<?php echo home_url('/about-us/'); ?>">About Us</a>
        <a href="<?php echo home_url('/services/'); ?>">Services</a>
        <a href="<?php echo home_url('/our-blog/'); ?>">Blog</a>
        <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
    </div>

    <!-- Site Header -->
    <header class="site-header" id="siteHeader">
        <div class="container">
            <div class="header-inner">
                <!-- Logo -->
                <a href="<?php echo home_url('/'); ?>" class="site-logo">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <span class="site-logo-text">Digital<span>Globallo</span></span>
                    <?php endif; ?>
                </a>

                <!-- Desktop Navigation -->
                <nav class="main-nav" id="mainNav">
                    <a href="<?php echo home_url('/'); ?>" <?php if (is_front_page())
                           echo 'class="active"'; ?>>Home</a>
                    <a href="<?php echo home_url('/about-us/'); ?>" <?php if (is_page('about-us'))
                           echo 'class="active"'; ?>>About Us</a>
                    <a href="<?php echo home_url('/services/'); ?>" <?php if (is_page('services'))
                           echo 'class="active"'; ?>>Services</a>
                    <a href="<?php echo home_url('/our-blog/'); ?>" <?php if (is_home() || is_single())
                           echo 'class="active"'; ?>>Blog</a>
                    <a href="<?php echo home_url('/contact/'); ?>" <?php if (is_page('contact'))
                           echo 'class="active"'; ?>>Contact</a>
                </nav>

                <!-- CTA Button -->
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm header-cta">
                    Get a Free Quote
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>