<?php
/**
 * Template Name: Services Page
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Our Services</h1>
        <p>Comprehensive digital marketing solutions tailored to amplify your brand, engage audiences, and drive
            measurable growth.</p>
        <div class="breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Services</span>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section section--light">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label">What We Offer</span>
            <h2 class="section-title">End-to-End Digital Solutions</h2>
            <p class="section-subtitle">From strategy to execution, we cover every touchpoint of your digital journey.
            </p>
        </div>

        <!-- Service 1: SEO -->
        <div class="service-detail reveal">
            <div class="service-detail-content">
                <span class="section-label">Service 01</span>
                <h3>Search Engine Optimization (SEO)</h3>
                <p>Achieve top rankings and sustainable organic growth with our comprehensive SEO strategies. We
                    optimize every aspect of your digital presence to attract high-intent traffic and qualified leads.
                </p>
                <ul class="service-detail-list">
                    <li>On-Page SEO & Technical Audits</li>
                    <li>Keyword Research & Content Strategy</li>
                    <li>Link Building & Authority Development</li>
                    <li>Local SEO & Google My Business Optimization</li>
                    <li>Competitor Analysis & Market Research</li>
                    <li>Monthly Performance Reporting</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=600&q=80&fit=crop"
                    alt="SEO Services" style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>

        <!-- Service 2: Social Media Marketing -->
        <div class="service-detail reveal">
            <div class="service-detail-content">
                <span class="section-label">Service 02</span>
                <h3>Social Media Marketing</h3>
                <p>Build a loyal community and amplify your brand voice across all major platforms. We create engaging
                    content, manage conversations, and run targeted campaigns that deliver real engagement.</p>
                <ul class="service-detail-list">
                    <li>Platform Strategy & Content Calendar</li>
                    <li>Community Management & Engagement</li>
                    <li>Influencer Marketing & Partnerships</li>
                    <li>Paid Social Campaigns (Meta, TikTok, LinkedIn)</li>
                    <li>Social Listening & Reputation Management</li>
                    <li>Analytics & Growth Reporting</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=600&q=80&fit=crop"
                    alt="Social Media Marketing"
                    style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>

        <!-- Service 3: PPC -->
        <div class="service-detail reveal">
            <div class="service-detail-content">
                <span class="section-label">Service 03</span>
                <h3>Pay-Per-Click Advertising (PPC)</h3>
                <p>Maximize every dollar of your ad spend with precision-targeted campaigns. From Google Ads to Meta
                    Ads, we create high-converting campaigns that deliver immediate, measurable results.</p>
                <ul class="service-detail-list">
                    <li>Google Ads (Search, Display, Shopping, YouTube)</li>
                    <li>Meta Ads (Facebook & Instagram)</li>
                    <li>TikTok & LinkedIn Advertising</li>
                    <li>Remarketing & Audience Targeting</li>
                    <li>Landing Page Optimization</li>
                    <li>A/B Testing & Bid Management</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80&fit=crop"
                    alt="PPC Advertising" style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>

        <!-- Service 4: Content Marketing -->
        <div class="service-detail reveal">
            <div class="service-detail-content">
                <span class="section-label">Service 04</span>
                <h3>Content Marketing</h3>
                <p>Tell your brand story with compelling content that resonates, educates, and converts. Our content
                    strategies drive organic visibility and establish your authority in the market.</p>
                <ul class="service-detail-list">
                    <li>Blog Writing & Article Production</li>
                    <li>Video Content Strategy & Production</li>
                    <li>Infographic Design</li>
                    <li>Email Marketing & Automation</li>
                    <li>E-books & Whitepapers</li>
                    <li>Content Distribution & Promotion</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?w=600&q=80&fit=crop"
                    alt="Content Marketing" style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>

        <!-- Service 5: Web Design -->
        <div class="service-detail reveal">
            <div class="service-detail-content">
                <span class="section-label">Service 05</span>
                <h3>Website Design & Development</h3>
                <p>Create a stunning digital home for your brand. We build fast, responsive, conversion-optimized
                    websites that deliver exceptional user experiences and drive business results.</p>
                <ul class="service-detail-list">
                    <li>WordPress & Custom Development</li>
                    <li>E-Commerce (Shopify, WooCommerce)</li>
                    <li>Landing Page Design & Optimization</li>
                    <li>UX/UI Design & Prototyping</li>
                    <li>Website Speed & Performance Optimization</li>
                    <li>Ongoing Maintenance & Support</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80&fit=crop"
                    alt="Web Design & Development"
                    style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>

        <!-- Service 6: Analytics -->
        <div class="service-detail reveal" style="border-bottom: none;">
            <div class="service-detail-content">
                <span class="section-label">Service 06</span>
                <h3>Analytics & Reporting</h3>
                <p>Transform raw data into actionable insights. We set up comprehensive tracking, build custom
                    dashboards, and deliver clear reporting so you always know exactly how your campaigns are
                    performing.</p>
                <ul class="service-detail-list">
                    <li>Google Analytics 4 Setup & Configuration</li>
                    <li>Conversion Tracking & Goal Setup</li>
                    <li>Custom Dashboard Creation</li>
                    <li>Monthly Performance Reports</li>
                    <li>Attribution Modeling</li>
                    <li>ROI Analysis & Recommendations</li>
                </ul>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary btn--sm">Get Started
                    <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
            <div class="service-detail-image">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80&fit=crop"
                    alt="Analytics & Reporting" style="width:100%; height:350px; object-fit:cover; border-radius:20px;">
            </div>
        </div>
    </div>
</section>

<!-- Our Process -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label" style="color: var(--color-primary);">Our Process</span>
            <h2 class="section-title" style="color: white;">How We Work</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">A proven methodology that ensures
                outstanding results for every project.</p>
        </div>

        <div class="process-grid reveal">
            <div class="process-step">
                <div class="process-number">01</div>
                <h3 style="color: white;">Discovery</h3>
                <p style="color: rgba(255,255,255,0.5);">Deep-dive into your business, industry, competitors, and target
                    audience.</p>
            </div>
            <div class="process-step">
                <div class="process-number">02</div>
                <h3 style="color: white;">Strategy</h3>
                <p style="color: rgba(255,255,255,0.5);">Craft a customized roadmap with clear goals, timelines, and
                    KPIs.</p>
            </div>
            <div class="process-step">
                <div class="process-number">03</div>
                <h3 style="color: white;">Execution</h3>
                <p style="color: rgba(255,255,255,0.5);">Launch campaigns with precision, creativity, and constant
                    monitoring.</p>
            </div>
            <div class="process-step">
                <div class="process-number">04</div>
                <h3 style="color: white;">Optimization</h3>
                <p style="color: rgba(255,255,255,0.5);">Analyze results, refine strategies, and scale what works to
                    maximize ROI.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="section section--light" style="padding: 60px 0;">
    <div class="container">
        <div class="stats-row reveal">
            <div class="stat-item">
                <div class="stat-number" data-counter="400" data-suffix="+">0+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-counter="450" data-suffix="+">0+</div>
                <div class="stat-label">Projects Done</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-counter="340" data-suffix="%">0%</div>
                <div class="stat-label">Avg. ROI Growth</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-counter="98" data-suffix="%">0%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>