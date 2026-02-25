<?php
/**
 * Template Name: About Page
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>About Digital Globallo</h1>
        <p>We are a team of passionate digital marketing experts committed to driving measurable growth for brands
            worldwide.</p>
        <div class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">About Us</span>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="section section--light">
    <div class="container">
        <div class="about-story">
            <div class="about-content reveal">
                <span class="section-label">Our Story</span>
                <h2>From Vision to Global Impact</h2>
                <p>Digital Globallo was born from a simple belief: every brand deserves access to world-class digital
                    marketing. What started as a one-person operation 7 years ago has evolved into a full-service
                    digital marketing agency serving clients across the UAE, India, and beyond.</p>
                <p>Our journey has been fueled by a relentless commitment to results. We've helped 400+ businesses —
                    from startups to established enterprises — unlock their digital potential through data-driven
                    strategies, creative campaigns, and transparent partnerships.</p>
                <p>Today, we combine deep expertise across SEO, social media, PPC, content marketing, and web
                    development to deliver integrated solutions that move the needle.</p>
            </div>
            <div class="about-image reveal">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80&fit=crop" alt="Our Story"
                    width="560" height="450" style="width:100%; height:420px; object-fit:cover; border-radius:20px;">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section section--dark" style="padding: 80px 0;">
    <div class="container">
        <div class="stats-row" style="grid-template-columns: 1fr 1fr; gap: 60px; text-align: left;">
            <div class="reveal" style="padding: 30px;">
                <span class="section-label">Our Mission</span>
                <h3 style="color: white; font-size: 1.6rem; margin-bottom: 16px;">Empower Brands to Win Online</h3>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 0;">We empower businesses with innovative digital
                    marketing solutions that drive traffic, build engagement, and generate revenue. Our mission is to
                    make advanced digital strategies accessible to every brand, regardless of size or industry.</p>
            </div>
            <div class="reveal" style="padding: 30px;">
                <span class="section-label">Our Vision</span>
                <h3 style="color: white; font-size: 1.6rem; margin-bottom: 16px;">Be the #1 Global Digital Partner</h3>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 0;">We envision a world where every business has
                    the tools and expertise to thrive in the digital landscape. We aim to be the most trusted digital
                    marketing partner for growing brands worldwide.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section section--light">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Core Values</span>
            <h2 class="section-title">What Drives Us</h2>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('trending-up'); ?>
                </div>
                <h3>Results-Driven</h3>
                <p>Every strategy we create is built around measurable outcomes. We're obsessed with data, KPIs, and
                    delivering real ROI.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('shield'); ?>
                </div>
                <h3>Transparency</h3>
                <p>No hidden fees, no fluff. We believe in honest communication, clear reporting, and genuine
                    partnerships.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('zap'); ?>
                </div>
                <h3>Innovation</h3>
                <p>We stay ahead of trends, adopting the latest tools and techniques to give our clients a competitive
                    edge.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('globe'); ?>
                </div>
                <h3>Global Perspective</h3>
                <p>With experience across multiple markets, we bring a worldview that helps brands succeed locally and
                    globally.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('heart'); ?>
                </div>
                <h3>Client-First</h3>
                <p>Your success is our success. We invest deeply in understanding your business to create strategies
                    that truly work.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <?php echo digitalgloballo_icon('award'); ?>
                </div>
                <h3>Excellence</h3>
                <p>We hold ourselves to the highest standards. Every campaign, every asset, every interaction reflects
                    our commitment to quality.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section section--white">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">Our Team</span>
            <h2 class="section-title">Meet The Experts</h2>
            <p class="section-subtitle">A talented team of strategists, creatives, and data experts dedicated to your
                success.</p>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <div class="team-card-image"
                    style="background: linear-gradient(135deg, #f2f1ef, #ddd); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--color-primary);">
                    HH</div>
                <h3>Heleena Haroon</h3>
                <span class="team-role">Founder & CEO</span>
                <div class="team-card-socials">
                    <a href="#" aria-label="LinkedIn">
                        <?php echo digitalgloballo_icon('linkedin'); ?>
                    </a>
                    <a href="#" aria-label="Twitter">
                        <?php echo digitalgloballo_icon('twitter'); ?>
                    </a>
                </div>
            </div>
            <div class="team-card">
                <div class="team-card-image"
                    style="background: linear-gradient(135deg, #f2f1ef, #ddd); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--color-primary);">
                    SK</div>
                <h3>Sarah Khan</h3>
                <span class="team-role">SEO Lead</span>
                <div class="team-card-socials">
                    <a href="#" aria-label="LinkedIn">
                        <?php echo digitalgloballo_icon('linkedin'); ?>
                    </a>
                </div>
            </div>
            <div class="team-card">
                <div class="team-card-image"
                    style="background: linear-gradient(135deg, #f2f1ef, #ddd); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--color-primary);">
                    MR</div>
                <h3>Michael Ross</h3>
                <span class="team-role">PPC Strategist</span>
                <div class="team-card-socials">
                    <a href="#" aria-label="LinkedIn">
                        <?php echo digitalgloballo_icon('linkedin'); ?>
                    </a>
                </div>
            </div>
            <div class="team-card">
                <div class="team-card-image"
                    style="background: linear-gradient(135deg, #f2f1ef, #ddd); display: flex; align-items: center; justify-content: center; font-family: var(--font-heading); font-size: 2rem; font-weight: 700; color: var(--color-primary);">
                    PA</div>
                <h3>Priya Anand</h3>
                <span class="team-role">Content Manager</span>
                <div class="team-card-socials">
                    <a href="#" aria-label="LinkedIn">
                        <?php echo digitalgloballo_icon('linkedin'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>