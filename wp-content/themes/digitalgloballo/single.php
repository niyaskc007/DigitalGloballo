<?php
/**
 * Single Post Template
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <div class="breadcrumb" style="margin-bottom: 16px;">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <a href="<?php echo home_url('/blog/'); ?>">Blog</a>
            <span class="separator">/</span>
            <span class="current">
                <?php the_title(); ?>
            </span>
        </div>
        <h1 style="font-size: 2.5rem; max-width: 800px; margin: 0 auto;">
            <?php the_title(); ?>
        </h1>
        <div
            style="display: flex; justify-content: center; gap: 20px; margin-top: 20px; font-size: 0.9rem; color: rgba(255,255,255,0.5);">
            <span>
                <?php echo get_the_date('F j, Y'); ?>
            </span>
            <span>•</span>
            <span>By
                <?php the_author(); ?>
            </span>
            <span>•</span>
            <span>
                <?php the_category(', '); ?>
            </span>
        </div>
    </div>
</section>

<!-- Post Content -->
<section class="section section--light" style="padding: 60px 0;">
    <div class="container">
        <div class="single-post-content">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>"
                    style="width: 100%; border-radius: 16px; margin-bottom: 40px;">
            <?php endif; ?>

            <?php the_content(); ?>

            <!-- Post Tags -->
            <?php if (has_tag()): ?>
                <div style="margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--color-border);">
                    <strong style="font-family: var(--font-heading);">Tags:</strong>
                    <?php the_tags('<span style="display: inline-flex; gap: 8px; margin-left: 8px;">', '', '</span>'); ?>
                </div>
            <?php endif; ?>

            <!-- Post Navigation -->
            <div
                style="display: flex; justify-content: space-between; margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--color-border);">
                <div>
                    <?php previous_post_link('%link', '← Previous Post'); ?>
                </div>
                <div>
                    <?php next_post_link('%link', 'Next Post →'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
<section class="section section--white" style="padding: 60px 0;">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="font-size: 2rem;">Related Articles</h2>
        </div>
        <div class="blog-grid">
            <?php
            $categories = get_the_category();
            if ($categories) {
                $cat_ids = array();
                foreach ($categories as $cat) {
                    $cat_ids[] = $cat->term_id;
                }
                $related = new WP_Query(array(
                    'category__in' => $cat_ids,
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                ));

                if ($related->have_posts()):
                    while ($related->have_posts()):
                        $related->the_post();
                        ?>
                        <article class="blog-card">
                            <?php if (has_post_thumbnail()): ?>
                                <img class="blog-card-image" src="<?php the_post_thumbnail_url('blog-card'); ?>"
                                    alt="<?php the_title_attribute(); ?>">
                            <?php else: ?>
                                <div class="blog-card-image" style="background: linear-gradient(135deg, #f2f1ef, #e0dfdd);"></div>
                            <?php endif; ?>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                    <span>
                                        <?php echo get_the_date('M d, Y'); ?>
                                    </span>
                                </div>
                                <h3><a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a></h3>
                                <p>
                                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    Read More
                                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>