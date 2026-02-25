<?php
/**
 * Template Name: Contact Page
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Ready to start your digital journey? Get in touch and let's discuss how we can help your brand grow.</p>
        <div class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Contact</span>
        </div>
    </div>
</section>

<!-- Contact Content -->
<section class="section section--light">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="reveal">
                <span class="section-label">Get In Touch</span>
                <h2 style="margin-bottom: 16px;">Let's Talk About Your Project</h2>
                <p style="margin-bottom: 32px;">Have a question or ready to start? Reach out to us through any of the
                    channels below, or fill out the form and we'll get back to you within 24 hours.</p>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <?php echo digitalgloballo_icon('mail'); ?>
                    </div>
                    <div>
                        <h4>Email Us</h4>
                        <p><a
                                href="mailto:<?php echo esc_attr(get_theme_mod('company_email', 'hello@digitalgloballo.com')); ?>">
                                <?php echo esc_html(get_theme_mod('company_email', 'hello@digitalgloballo.com')); ?>
                            </a></p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <?php echo digitalgloballo_icon('phone'); ?>
                    </div>
                    <div>
                        <h4>Call Us</h4>
                        <p><a href="tel:<?php echo esc_attr(get_theme_mod('company_phone', '+971 XX XXX XXXX')); ?>">
                                <?php echo esc_html(get_theme_mod('company_phone', '+971 XX XXX XXXX')); ?>
                            </a></p>
                    </div>
                </div>

                <div class="contact-info-card">
                    <div class="contact-info-icon">
                        <?php echo digitalgloballo_icon('map-pin'); ?>
                    </div>
                    <div>
                        <h4>Location</h4>
                        <p>
                            <?php echo esc_html(get_theme_mod('company_address', 'UAE & India')); ?>
                        </p>
                    </div>
                </div>

                <div class="contact-info-card" style="border-bottom: none;">
                    <div class="contact-info-icon">
                        <?php echo digitalgloballo_icon('globe'); ?>
                    </div>
                    <div>
                        <h4>Working Hours</h4>
                        <p>Sunday – Thursday: 9:00 AM – 6:00 PM<br>Friday & Saturday: By appointment</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div style="margin-top: 32px;">
                    <h4 style="margin-bottom: 16px;">Follow Us</h4>
                    <div class="footer-socials">
                        <a href="<?php echo esc_url(get_theme_mod('social_facebook', '#')); ?>" target="_blank"
                            rel="noopener" aria-label="Facebook"
                            style="border-color: var(--color-border); color: var(--color-text-body);">
                            <?php echo digitalgloballo_icon('facebook'); ?>
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('social_instagram', '#')); ?>" target="_blank"
                            rel="noopener" aria-label="Instagram"
                            style="border-color: var(--color-border); color: var(--color-text-body);">
                            <?php echo digitalgloballo_icon('instagram'); ?>
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>" target="_blank"
                            rel="noopener" aria-label="LinkedIn"
                            style="border-color: var(--color-border); color: var(--color-text-body);">
                            <?php echo digitalgloballo_icon('linkedin'); ?>
                        </a>
                        <a href="<?php echo esc_url(get_theme_mod('social_twitter', '#')); ?>" target="_blank"
                            rel="noopener" aria-label="Twitter"
                            style="border-color: var(--color-border); color: var(--color-text-body);">
                            <?php echo digitalgloballo_icon('twitter'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form reveal">
                <h3>Send Us a Message</h3>
                <form id="contactForm" method="post" action="#">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Full Name *</label>
                            <input type="text" id="contact-name" name="name" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email Address *</label>
                            <input type="email" id="contact-email" name="email" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="phone" placeholder="+971 XX XXX XXXX">
                        </div>
                        <div class="form-group">
                            <label for="contact-service">Service Interested In</label>
                            <select id="contact-service" name="service">
                                <option value="">Select a service</option>
                                <option value="seo">SEO Optimization</option>
                                <option value="social">Social Media Marketing</option>
                                <option value="ppc">PPC Advertising</option>
                                <option value="content">Content Marketing</option>
                                <option value="web">Website Design & Development</option>
                                <option value="analytics">Analytics & Reporting</option>
                                <option value="other">Other / Multiple</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-budget">Monthly Budget Range</label>
                        <select id="contact-budget" name="budget">
                            <option value="">Select budget range</option>
                            <option value="<1000">Under $1,000</option>
                            <option value="1000-3000">$1,000 – $3,000</option>
                            <option value="3000-5000">$3,000 – $5,000</option>
                            <option value="5000-10000">$5,000 – $10,000</option>
                            <option value="10000+">$10,000+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Tell Us About Your Project *</label>
                        <textarea id="contact-message" name="message"
                            placeholder="Describe your goals, challenges, and what you're looking for..."
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary btn--lg"
                        style="width: 100%; justify-content: center;">
                        Send Message
                        <?php echo digitalgloballo_icon('arrow-right'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Placeholder -->
<section
    style="background: var(--color-dark); padding: 0; height: 400px; display: flex; align-items: center; justify-content: center;">
    <div style="text-align: center; color: rgba(255,255,255,0.3);">
        <div style="font-size: 3rem; margin-bottom: 10px;">
            <?php echo digitalgloballo_icon('map-pin'); ?>
        </div>
        <p style="font-family: var(--font-heading); font-size: 1.1rem;">Google Map Integration<br><small>Add your Google
                Maps embed code in the WordPress Customizer</small></p>
    </div>
</section>

<?php get_footer(); ?>