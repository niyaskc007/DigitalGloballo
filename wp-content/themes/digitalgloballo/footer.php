<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content reveal">
            <span class="section-label" style="color: var(--color-primary);">Ready to Grow?</span>
            <h2>Let's Build Your Digital Success Story</h2>
            <p>Partner with Digital Globallo to create impactful strategies that drive engagement, boost conversions,
                and elevate your brand to new heights.</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--lg">
                    Get a Free Consultation
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
                <a href="<?php echo home_url('/services/'); ?>" class="btn btn--outline-white btn--lg">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <span class="site-logo-text">Digital<span style="color: var(--color-primary);">Globallo</span></span>
                <p>Driving growth with data-driven strategies, innovative marketing, and expert digital solutions to
                    elevate your brand's success globally.</p>
                <div class="footer-socials">
                    <a href="<?php echo esc_url(get_theme_mod('social_facebook', '#')); ?>" target="_blank"
                        rel="noopener" aria-label="Facebook">
                        <?php echo digitalgloballo_icon('facebook'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_instagram', '#')); ?>" target="_blank"
                        rel="noopener" aria-label="Instagram">
                        <?php echo digitalgloballo_icon('instagram'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>" target="_blank"
                        rel="noopener" aria-label="LinkedIn">
                        <?php echo digitalgloballo_icon('linkedin'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_twitter', '#')); ?>" target="_blank"
                        rel="noopener" aria-label="Twitter / X">
                        <?php echo digitalgloballo_icon('twitter'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('social_tiktok', '#')); ?>" target="_blank" rel="noopener"
                        aria-label="TikTok">
                        <?php echo digitalgloballo_icon('tiktok'); ?>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about/'); ?>">About Us</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">Services</a></li>
                    <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/services/'); ?>">SEO Optimization</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">Social Media Marketing</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">PPC Advertising</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">Content Marketing</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">Web Design</a></li>
                    <li><a href="<?php echo home_url('/services/'); ?>">Analytics & Reporting</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-col footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to our newsletter for the latest digital marketing insights and tips.</p>
                <form class="newsletter-form" action="#" method="post">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit">Subscribe</button>
                </form>
                <div style="margin-top: 24px;">
                    <h4 style="margin-bottom: 12px;">Contact</h4>
                    <ul class="footer-links">
                        <li>
                            <?php echo digitalgloballo_icon('mail'); ?> <a
                                href="mailto:<?php echo esc_attr(get_theme_mod('company_email', 'hello@digitalgloballo.com')); ?>">
                                <?php echo esc_html(get_theme_mod('company_email', 'hello@digitalgloballo.com')); ?>
                            </a>
                        </li>
                        <li>
                            <?php echo digitalgloballo_icon('phone'); ?> <a
                                href="tel:<?php echo esc_attr(get_theme_mod('company_phone', '+971 XX XXX XXXX')); ?>">
                                <?php echo esc_html(get_theme_mod('company_phone', '+971 XX XXX XXXX')); ?>
                            </a>
                        </li>
                        <li>
                            <?php echo digitalgloballo_icon('map-pin'); ?>
                            <?php echo esc_html(get_theme_mod('company_address', 'UAE & India')); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy;
                <?php echo date('Y'); ?> Digital Globallo. All rights reserved. | Strategize. Optimize. Succeed.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>