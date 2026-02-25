<?php
/**
 * 404 Page Template
 *
 * @package DigitalGloballo
 */

get_header();
?>

<section class="page-banner" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container" style="text-align: center;">
        <div
            style="font-size: 8rem; font-family: var(--font-heading); font-weight: 700; color: var(--color-primary); line-height: 1;">
            404</div>
        <h1 style="font-size: 2.5rem; margin-bottom: 16px;">Page Not Found</h1>
        <p style="color: rgba(255,255,255,0.6); max-width: 500px; margin: 0 auto 30px;">The page you're looking for
            doesn't exist or has been moved. Let's get you back on track.</p>
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="<?php echo home_url('/'); ?>" class="btn btn--primary">
                Back to Home
                <?php echo digitalgloballo_icon('arrow-right'); ?>
            </a>
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--outline-white">
                Contact Us
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>