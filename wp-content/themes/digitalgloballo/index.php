<?php
/**
 * The main template file (Blog listing)
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Our Blog</h1>
        <p>Stay ahead with the latest digital marketing trends, strategies, and insights from our experts.</p>
        <div class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Blog</span>
        </div>
    </div>
</section>

<!-- Blog Listing -->
<section class="section section--light">
    <div class="container">
        <?php if (have_posts()): ?>
            <div class="blog-grid">
                <?php while (have_posts()):
                    the_post(); ?>
                    <article class="blog-card" id="post-<?php the_ID(); ?>">
                        <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>">
                                <img class="blog-card-image" src="<?php the_post_thumbnail_url('blog-card'); ?>"
                                    alt="<?php the_title_attribute(); ?>">
                            </a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="blog-card-image"
                                    style="background: linear-gradient(135deg, #f2f1ef, #e0dfdd); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 1.2rem; font-weight: 600; color: var(--color-primary);">
                                    <?php echo esc_html(get_the_category_list()); ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        <div class="blog-card-content">
                            <div class="blog-card-meta">
                                <span>
                                    <?php echo get_the_date('M d, Y'); ?>
                                </span>
                                <span>
                                    <?php the_category(', '); ?>
                                </span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h3>
                            <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                Read More
                                <?php echo digitalgloballo_icon('arrow-right'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div style="text-align: center; margin-top: 50px;">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ));
                ?>
            </div>
        <?php else: ?>
            <div style="text-align: center; padding: 80px 20px;">
                <h2>No Posts Yet</h2>
                <p style="max-width: 500px; margin: 16px auto;">We're working on exciting content. Check back soon for
                    digital marketing insights, tips, and strategies.</p>
                <a href="<?php echo home_url('/'); ?>" class="btn btn--primary" style="margin-top: 20px;">Back to Home</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>