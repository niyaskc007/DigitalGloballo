/**
 * Digital Globallo - Main JavaScript
 * Handles animations, interactions, and UI enhancements
 */

(function () {
    'use strict';

    /* ============================================
       HEADER SCROLL EFFECT
       ============================================ */
    const header = document.getElementById('siteHeader');
    let lastScroll = 0;

    function handleHeaderScroll() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        lastScroll = currentScroll;
    }

    window.addEventListener('scroll', handleHeaderScroll, { passive: true });

    /* ============================================
       MOBILE MENU
       ============================================ */
    const menuToggle = document.getElementById('menuToggle');
    const mobileNav = document.getElementById('mobileNav');

    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', function () {
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        });

        // Close menu on link click
        mobileNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.classList.remove('active');
                mobileNav.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    /* ============================================
       SCROLL REVEAL ANIMATION
       ============================================ */
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
        const windowHeight = window.innerHeight;

        reveals.forEach(function (el) {
            const elementTop = el.getBoundingClientRect().top;
            const revealPoint = 120;

            if (elementTop < windowHeight - revealPoint) {
                el.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll, { passive: true });
    window.addEventListener('load', revealOnScroll);

    /* ============================================
       COUNTER ANIMATION
       ============================================ */
    function animateCounters() {
        const counters = document.querySelectorAll('[data-counter]');

        counters.forEach(function (counter) {
            if (counter.dataset.animated) return;

            const rect = counter.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                counter.dataset.animated = 'true';
                const target = parseInt(counter.dataset.counter, 10);
                const duration = 2000;
                const startTime = performance.now();

                function updateCounter(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    // Ease-out cubic
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    const current = Math.floor(easeOut * target);

                    counter.textContent = current + (counter.dataset.suffix || '');

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + (counter.dataset.suffix || '');
                    }
                }

                requestAnimationFrame(updateCounter);
            }
        });
    }

    window.addEventListener('scroll', animateCounters, { passive: true });
    window.addEventListener('load', animateCounters);

    /* ============================================
       SMOOTH SCROLLING FOR ANCHOR LINKS
       ============================================ */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    /* ============================================
       STAGGERED CARD ANIMATIONS
       ============================================ */
    function staggerCards() {
        const grids = document.querySelectorAll('.services-grid, .services-grid-v2, .testimonials-grid, .testi-grid, .blog-grid, .team-grid, .values-grid, .cases-grid');

        grids.forEach(function (grid) {
            const cards = grid.children;
            const gridTop = grid.getBoundingClientRect().top;

            if (gridTop < window.innerHeight - 100) {
                Array.from(cards).forEach(function (card, index) {
                    if (!card.classList.contains('stagger-visible')) {
                        setTimeout(function () {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                            card.classList.add('stagger-visible');
                        }, index * 100);
                    }
                });
            }
        });
    }

    // Initialize stagger styles
    document.querySelectorAll('.services-grid > *, .services-grid-v2 > *, .testimonials-grid > *, .testi-grid > *, .blog-grid > *, .team-grid > *, .values-grid > *, .cases-grid > *').forEach(function (card) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    window.addEventListener('scroll', staggerCards, { passive: true });
    window.addEventListener('load', staggerCards);

    /* ============================================
       CONTACT FORM HANDLING (basic)
       ============================================ */
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            submitBtn.innerHTML = 'Sending...';
            submitBtn.disabled = true;

            // Simulate form submission
            setTimeout(function () {
                submitBtn.innerHTML = '✓ Message Sent!';
                submitBtn.style.background = '#27ae60';

                setTimeout(function () {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    submitBtn.disabled = false;
                    contactForm.reset();
                }, 3000);
            }, 1500);
        });
    }

    /* ============================================
       NEWSLETTER FORM
       ============================================ */
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const input = this.querySelector('input');
            const originalText = btn.textContent;

            btn.textContent = 'Subscribed!';
            btn.style.background = '#27ae60';
            input.value = '';

            setTimeout(function () {
                btn.textContent = originalText;
                btn.style.background = '';
            }, 3000);
        });
    });

})();
