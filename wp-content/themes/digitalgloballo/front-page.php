<?php
/**
 * Template Name: Front Page
 * The homepage template for Digital Globallo
 *
 * @package DigitalGloballo
 */

get_header();
?>

<!-- ============================================
     HERO SECTION — DARK PREMIUM
     ============================================ -->
<section class="hero-v2" id="hero">
    <!-- Animated grid lines background -->
    <div class="hero-v2-grid"></div>
    <!-- Glowing orbs -->
    <div class="hero-orb hero-orb--1"></div>
    <div class="hero-orb hero-orb--2"></div>

    <div class="container">
        <div class="hero-v2-inner">

            <!-- LEFT: Content -->
            <div class="hero-v2-content">
                <div class="hero-v2-badge">
                    <span class="badge-dot"></span>
                    <span>Global Digital Marketing Agency</span>
                    <span class="badge-ping"></span>
                </div>

                <h1 class="hero-v2-heading">
                    We Help Brands<br>
                    <span class="hero-v2-highlight">Dominate</span><br>
                    The Digital World
                </h1>

                <p class="hero-v2-subtext">From SEO to high-converting ad campaigns — we deliver data-driven strategies
                    that fuel growth, amplify your brand, and generate measurable results worldwide.</p>

                <div class="hero-v2-actions">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn-hero-primary">
                        Get Free Consultation
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>
                    <a href="<?php echo home_url('/services/'); ?>" class="btn-hero-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3" />
                        </svg>
                        View Our Work
                    </a>
                </div>

                <!-- Stats row -->
                <div class="hero-v2-stats">
                    <div class="hero-v2-stat">
                        <div class="hvs-num"><span data-counter="400" data-suffix="+">0+</span></div>
                        <div class="hvs-label">Clients</div>
                    </div>
                    <div class="hero-v2-stat-divider"></div>
                    <div class="hero-v2-stat">
                        <div class="hvs-num"><span data-counter="450" data-suffix="+">0+</span></div>
                        <div class="hvs-label">Projects</div>
                    </div>
                    <div class="hero-v2-stat-divider"></div>
                    <div class="hero-v2-stat">
                        <div class="hvs-num"><span data-counter="7" data-suffix="+">0+</span></div>
                        <div class="hvs-label">Years</div>
                    </div>
                    <div class="hero-v2-stat-divider"></div>
                    <div class="hero-v2-stat">
                        <div class="hvs-num"><span data-counter="340" data-suffix="%">0%</span></div>
                        <div class="hvs-label">Avg ROI</div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Metrics Dashboard (CSS-only, no image needed) -->
            <div class="hero-v2-visual">
                <!-- Main dashboard card -->
                <div class="dash-card">
                    <div class="dash-header">
                        <div class="dash-header-dots">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="dash-header-title">Campaign Performance</div>
                        <div class="dash-live"><span class="live-dot"></span>Live</div>
                    </div>
                    <div class="dash-body">
                        <!-- Chart bars -->
                        <div class="dash-chart">
                            <div class="dchart-bars">
                                <div class="dchart-bar" style="--h:45%"><span>Jan</span></div>
                                <div class="dchart-bar" style="--h:60%"><span>Feb</span></div>
                                <div class="dchart-bar" style="--h:50%"><span>Mar</span></div>
                                <div class="dchart-bar" style="--h:78%"><span>Apr</span></div>
                                <div class="dchart-bar" style="--h:65%"><span>May</span></div>
                                <div class="dchart-bar active" style="--h:92%"><span>Jun</span></div>
                            </div>
                        </div>
                        <!-- Metrics row -->
                        <div class="dash-metrics">
                            <div class="dash-metric">
                                <div class="dm-icon dm-icon--green">↑</div>
                                <div class="dm-data">
                                    <div class="dm-val">+340%</div>
                                    <div class="dm-key">ROI Growth</div>
                                </div>
                            </div>
                            <div class="dash-metric">
                                <div class="dm-icon dm-icon--orange">✦</div>
                                <div class="dm-data">
                                    <div class="dm-val">98.4%</div>
                                    <div class="dm-key">Client Sat.</div>
                                </div>
                            </div>
                            <div class="dash-metric">
                                <div class="dm-icon dm-icon--blue">⚡</div>
                                <div class="dm-data">
                                    <div class="dm-val">2.4x</div>
                                    <div class="dm-key">Conv. Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Floating mini-card 1 -->
                <div class="dash-mini-card dash-mini--top">
                    <div class="dmc-icon">🚀</div>
                    <div>
                        <div class="dmc-val">+127%</div>
                        <div class="dmc-key">Organic Traffic</div>
                    </div>
                </div>
                <!-- Floating mini-card 2 -->
                <div class="dash-mini-card dash-mini--bottom">
                    <div class="dmc-icon">💰</div>
                    <div>
                        <div class="dmc-val">$4.8M+</div>
                        <div class="dmc-key">Revenue Generated</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     MARQUEE CLIENT BAR
     ============================================ -->
<div class="marquee-bar">
    <div class="marquee-label">Trusted by leading brands</div>
    <div class="marquee-track-wrap">
        <div class="marquee-track">
            <span class="mq-item">Danube Home</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Al Futtaim</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Emirates Group</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Magic Solutions</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Danube Hospitality</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">GEMS Education</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Gulf Properties</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">NMC Healthcare</span>
            <span class="mq-dot">✦</span>
            <!-- Duplicate for infinite loop -->
            <span class="mq-item">Danube Home</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Al Futtaim</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Emirates Group</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Magic Solutions</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Danube Hospitality</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">GEMS Education</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">Gulf Properties</span>
            <span class="mq-dot">✦</span>
            <span class="mq-item">NMC Healthcare</span>
            <span class="mq-dot">✦</span>
        </div>
    </div>
</div>

<!-- ============================================
     SERVICES SECTION — NUMBERED CARDS
     ============================================ -->
<section class="section section--light" id="services">
    <div class="container">
        <div class="section-header">
            <div class="section-label">What We Do</div>
            <h2 class="section-title">Services That Drive <span style="color:var(--color-primary)">Real Results</span>
            </h2>
            <p class="section-subtitle">Every service we offer is backed by data, strategy, and a relentless focus on
                your growth.</p>
        </div>

        <div class="services-grid-v2">
            <div class="svc-card">
                <div class="svc-num">01</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('search'); ?></div>
                <h3>SEO & Organic Growth</h3>
                <p>Rank higher, get found faster. We build search strategies that generate sustainable, compounding
                    organic traffic and leads.</p>
                <div class="svc-tags"><span>Technical SEO</span><span>Link Building</span><span>Content</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>

            <div class="svc-card">
                <div class="svc-num">02</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('megaphone'); ?></div>
                <h3>Social Media Marketing</h3>
                <p>Build community, generate demand and drive real engagement across all major social platforms with
                    compelling content strategies.</p>
                <div class="svc-tags"><span>Instagram</span><span>LinkedIn</span><span>TikTok</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>

            <div class="svc-card svc-card--featured">
                <div class="svc-featured-label">Most Popular</div>
                <div class="svc-num">03</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('target'); ?></div>
                <h3>PPC & Paid Advertising</h3>
                <p>High-ROI campaign management across Google, Meta, and beyond. We turn ad spend into measurable
                    revenue and qualified leads.</p>
                <div class="svc-tags"><span>Google Ads</span><span>Meta Ads</span><span>Retargeting</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>

            <div class="svc-card">
                <div class="svc-num">04</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('edit'); ?></div>
                <h3>Content Marketing</h3>
                <p>Stories that sell. We craft high-value content that positions your brand as a thought leader and
                    drives bottom-of-funnel conversions.</p>
                <div class="svc-tags"><span>Copywriting</span><span>Video</span><span>Strategy</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>

            <div class="svc-card">
                <div class="svc-num">05</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('layout'); ?></div>
                <h3>Web Design & Development</h3>
                <p>Conversion-optimised websites and landing pages built for speed, UX, and SEO from the ground up.</p>
                <div class="svc-tags"><span>WordPress</span><span>UX/UI</span><span>CRO</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>

            <div class="svc-card">
                <div class="svc-num">06</div>
                <div class="svc-icon"><?php echo digitalgloballo_icon('bar-chart'); ?></div>
                <h3>Analytics & Reporting</h3>
                <p>Full-funnel visibility. Dashboards and monthly reports that translate data into strategy and clear
                    business decisions.</p>
                <div class="svc-tags"><span>GA4</span><span>Reporting</span><span>Attribution</span></div>
                <a href="<?php echo home_url('/services/'); ?>" class="svc-link">Learn more
                    <?php echo digitalgloballo_icon('arrow-right'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     ABOUT / RESULTS SPLIT SECTION
     ============================================ -->
<section class="section section--white" id="about">
    <div class="container">
        <div class="about-split">
            <div class="about-split-image">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&q=85&fit=crop"
                    alt="Digital Globallo Team" style="width:100%;height:520px;object-fit:cover;border-radius:24px;">
                <div class="about-split-badge">
                    <div class="asb-num">7+</div>
                    <div class="asb-txt">Years of Global Impact</div>
                </div>
            </div>
            <div class="about-split-content">
                <div class="section-label">About Us</div>
                <h2>We Are the Growth Engine Behind <span style="color:var(--color-primary)">400+ Brands</span></h2>
                <p>Digital Globallo is a performance-driven digital marketing agency operating across the UAE, India,
                    and beyond. We combine creative strategy with data science to deliver campaigns that don't just look
                    good — they perform.</p>
                <p>Our team of 50+ specialists covers every channel: from search and social to content and conversion —
                    so you get a fully coordinated digital presence that compounds results over time.</p>

                <div class="about-pillars">
                    <div class="pillar">
                        <div class="pillar-icon"><?php echo digitalgloballo_icon('award'); ?></div>
                        <div>
                            <strong>Award-Winning Strategy</strong>
                            <p>Recognised across the GCC for campaign excellence and measurable ROI.</p>
                        </div>
                    </div>
                    <div class="pillar">
                        <div class="pillar-icon"><?php echo digitalgloballo_icon('globe'); ?></div>
                        <div>
                            <strong>Global Reach, Local Expertise</strong>
                            <p>Multilingual teams with deep market knowledge in UAE, KSA, India & UK.</p>
                        </div>
                    </div>
                    <div class="pillar">
                        <div class="pillar-icon"><?php echo digitalgloballo_icon('trending-up'); ?></div>
                        <div>
                            <strong>Data-First Approach</strong>
                            <p>Every decision is backed by analytics, testing, and performance benchmarks.</p>
                        </div>
                    </div>
                </div>

                <a href="<?php echo home_url('/about/'); ?>" class="btn btn--primary">
                    Our Full Story <?php echo digitalgloballo_icon('arrow-right'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     STATS IMPACT BAND — FULL BACKGROUND
     ============================================ -->
<section class="impact-band">
    <div class="impact-band-bg"></div>
    <div class="container">
        <div class="impact-grid">
            <div class="impact-item">
                <div class="impact-num"><span data-counter="400" data-suffix="+">0+</span></div>
                <div class="impact-label">Satisfied Clients</div>
            </div>
            <div class="impact-item">
                <div class="impact-num"><span data-counter="450" data-suffix="+">0+</span></div>
                <div class="impact-label">Projects Delivered</div>
            </div>
            <div class="impact-item">
                <div class="impact-num"><span data-counter="340" data-suffix="%">0%</span></div>
                <div class="impact-label">Average ROI Growth</div>
            </div>
            <div class="impact-item">
                <div class="impact-num"><span data-counter="98" data-suffix="%">0%</span></div>
                <div class="impact-label">Client Retention Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CASE STUDIES
     ============================================ -->
<section class="section section--light" id="work">
    <div class="container">
        <div class="section-header">
            <div class="section-label">Case Studies</div>
            <h2 class="section-title">Proven Results for <span style="color:var(--color-primary)">Real Companies</span>
            </h2>
            <p class="section-subtitle">See how we've transformed digital presence and ROI for our clients across
                industries.</p>
        </div>

        <div class="cases-grid">
            <div class="case-card case-card--large">
                <div class="case-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=85&fit=crop"
                        alt="E-Commerce SEO Case Study" style="width:100%;height:100%;object-fit:cover;">
                    <div class="case-overlay">
                        <span class="case-tag">SEO + PPC</span>
                    </div>
                </div>
                <div class="case-body">
                    <h3>E-Commerce Giant: 3x Revenue in 12 Months</h3>
                    <p>Comprehensive SEO overhaul and Google Shopping campaigns that tripled organic traffic and doubled
                        conversion rates.</p>
                    <div class="case-kpis">
                        <div class="kpi"><span>+280%</span>Organic Traffic</div>
                        <div class="kpi"><span>+340%</span>Revenue</div>
                        <div class="kpi"><span>-42%</span>CPA</div>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-image case-image--sm">
                    <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?w=600&q=85&fit=crop"
                        alt="Real Estate Lead Gen" style="width:100%;height:100%;object-fit:cover;">
                    <div class="case-overlay">
                        <span class="case-tag">Social + Lead Gen</span>
                    </div>
                </div>
                <div class="case-body">
                    <h3>Real Estate: 500+ Qualified Leads Per Month</h3>
                    <p>Facebook and Instagram lead campaigns with hyper-targeted audience segmentation.</p>
                    <div class="case-kpis">
                        <div class="kpi"><span>500+</span>Monthly Leads</div>
                        <div class="kpi"><span>-55%</span>Cost/Lead</div>
                    </div>
                </div>
            </div>

            <div class="case-card">
                <div class="case-image case-image--sm">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=85&fit=crop"
                        alt="SaaS Brand Awareness" style="width:100%;height:100%;object-fit:cover;">
                    <div class="case-overlay">
                        <span class="case-tag">Content + LinkedIn</span>
                    </div>
                </div>
                <div class="case-body">
                    <h3>SaaS Startup: 10x LinkedIn Engagement in 90 Days</h3>
                    <p>Thought leadership content strategy and LinkedIn ads that put the brand in front of 200K+
                        decision-makers.</p>
                    <div class="case-kpis">
                        <div class="kpi"><span>10x</span>Engagement</div>
                        <div class="kpi"><span>200K+</span>Impressions</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:48px;">
            <a href="<?php echo home_url('/services/'); ?>" class="btn btn--dark btn--lg">
                See All Case Studies <?php echo digitalgloballo_icon('arrow-right'); ?>
            </a>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS — CARD ROW
     ============================================ -->
<section class="section section--white" id="testimonials">
    <div class="container">
        <div class="section-header">
            <div class="section-label">Testimonials</div>
            <h2 class="section-title">Words from Our <span style="color:var(--color-primary)">Clients</span></h2>
        </div>

        <div class="testi-grid">
            <?php
            // Testimonials CPT query — falls back to hardcoded if none added
            $testimonials = get_posts(array('post_type' => 'dg_testimonial', 'posts_per_page' => 3));
            if ($testimonials):
                foreach ($testimonials as $t):
                    $client = get_post_meta($t->ID, '_dg_client_name', true);
                    $role = get_post_meta($t->ID, '_dg_client_role', true);
                    $rating = intval(get_post_meta($t->ID, '_dg_rating', true) ?: 5);
                    ?>
                    <div class="testi-card">
                        <div class="testi-stars"><?php echo str_repeat('★', $rating); ?></div>
                        <p class="testi-quote"><?php echo wp_kses_post($t->post_content); ?></p>
                        <div class="testi-author">
                            <div class="testi-avatar"><?php echo strtoupper(substr($client, 0, 2)); ?></div>
                            <div>
                                <strong><?php echo esc_html($client); ?></strong>
                                <span><?php echo esc_html($role); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            else: ?>
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"Digital Globallo transformed our online presence completely. In 6 months, our
                        organic traffic tripled and our CAC dropped by 40%. The team is strategic, data-driven, and
                        genuinely cares about results."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">AM</div>
                        <div><strong>Ahmed Al-Mansouri</strong><span>CEO, Gulf Properties PJSC</span></div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"The PPC campaigns they run for us consistently outperform our in-house
                        benchmarks by 2–3x. Their reporting is transparent and their team is always one step ahead on
                        trends."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">PL</div>
                        <div><strong>Priya Lal</strong><span>Marketing Director, NMC Healthcare</span></div>
                    </div>
                </div>
                <div class="testi-card">
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-quote">"From strategy to execution, the Digital Globallo team feels like a true
                        extension of ours. Our social media following grew 400% in 8 months and, more importantly, our
                        revenue followed."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">SK</div>
                        <div><strong>Sara Khan</strong><span>Founder, MENA Fashion Brand</span></div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ============================================
     OUR PROCESS — HORIZONTAL STRIP
     ============================================ -->
<section class="section section--light" id="process">
    <div class="container">
        <div class="section-header">
            <div class="section-label">How We Work</div>
            <h2 class="section-title">Our <span style="color:var(--color-primary)">4-Step</span> Growth Framework</h2>
        </div>
        <div class="process-strip">
            <div class="process-step">
                <div class="ps-num">01</div>
                <div class="ps-body">
                    <h4>Discovery & Audit</h4>
                    <p>We analyse your current digital footprint, competitive landscape, and growth opportunities.</p>
                </div>
            </div>
            <div class="process-arrow">→</div>
            <div class="process-step">
                <div class="ps-num">02</div>
                <div class="ps-body">
                    <h4>Strategy & Roadmap</h4>
                    <p>A tailored 90-day action plan with clear KPIs, channels, budgets, and milestones.</p>
                </div>
            </div>
            <div class="process-arrow">→</div>
            <div class="process-step">
                <div class="ps-num">03</div>
                <div class="ps-body">
                    <h4>Execute & Optimise</h4>
                    <p>Our team launches and continuously optimises — testing, iterating, and scaling what works.</p>
                </div>
            </div>
            <div class="process-arrow">→</div>
            <div class="process-step">
                <div class="ps-num">04</div>
                <div class="ps-body">
                    <h4>Report & Scale</h4>
                    <p>Monthly transparency reports, then we double down on your top-performing channels.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CTA BAND — FULL DARK SPLIT
     ============================================ -->
<section class="cta-band">
    <div class="container">
        <div class="cta-band-inner">
            <div class="cta-band-left">
                <div class="section-label" style="color:rgba(255,255,255,0.5)">Ready to Grow?</div>
                <h2 style="color:#fff;font-size:2.5rem;line-height:1.15;">Let's Build Something <span
                        style="color:var(--color-primary)">Remarkable</span> Together</h2>
                <p style="color:rgba(255,255,255,0.6);margin-top:16px;">Book a free 30-minute strategy session. No sales
                    pitch, no obligation — just real insights for your business.</p>
            </div>
            <div class="cta-band-right">
                <a href="<?php echo home_url('/contact/'); ?>" class="btn-hero-primary">
                    Start Free Consultation
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </a>
                <div class="cta-trust">
                    <span>✓ No long-term contracts</span>
                    <span>✓ Results in 30 days</span>
                    <span>✓ Cancel anytime</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     LATEST BLOG POSTS
     ============================================ -->
<section class="section section--light" id="blog">
    <div class="container">
        <div class="section-header">
            <div class="section-label">Latest Insights</div>
            <h2 class="section-title">From Our <span style="color:var(--color-primary)">Blog</span></h2>
            <p class="section-subtitle">Expert tips, trends, and strategies from our marketing team.</p>
        </div>

        <?php
        $blog_posts = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
        ));
        ?>

        <?php if ($blog_posts): ?>
            <div class="blog-grid">
                <?php foreach ($blog_posts as $post): ?>
                    <article class="blog-card">
                        <?php if (has_post_thumbnail($post->ID)): ?>
                            <div class="blog-card-image">
                                <?php echo get_the_post_thumbnail($post->ID, 'blog-card', array('style' => 'width:100%;height:220px;object-fit:cover;')); ?>
                            </div>
                        <?php else: ?>
                            <div class="blog-card-image blog-card-image--placeholder">
                                <div></div>
                            </div>
                        <?php endif; ?>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span><?php echo get_the_date('M j, Y', $post->ID); ?></span>
                            </div>
                            <h3><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                            </h3>
                            <p><?php echo wp_trim_words(get_the_excerpt($post->ID), 18, '...'); ?></p>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="svc-link">Read More
                                <?php echo digitalgloballo_icon('arrow-right'); ?></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <div style="text-align:center;margin-top:48px;">
                <a href="<?php echo home_url('/blog/'); ?>" class="btn btn--outline">View All Posts</a>
            </div>
        <?php else: ?>
            <div class="blog-empty">
                <p>Blog posts coming soon. Check back for expert digital marketing insights.</p>
                <a href="<?php echo home_url('/contact/'); ?>" class="btn btn--primary">Talk to Our Experts</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>