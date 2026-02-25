<?php
/**
 * Default Page Template
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">
                <?php the_title(); ?>
            </span>
        </div>
    </div>
</section>

<!-- Page Content -->
<section class="section section--light">
    <div class="container">
        <div class="single-post-content">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>