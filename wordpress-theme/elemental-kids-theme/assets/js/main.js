/**
 * Main JavaScript for Elemental Kids Club Theme
 *
 * @package Elemental_Kids
 */

(function() {
    'use strict';

    // Document ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        // Initialize smooth scroll for anchor links
        initSmoothScroll();

        // Add animation classes on scroll
        initScrollAnimations();
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if it's just "#"
                if (href === '#') return;

                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();

                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Update URL without triggering scroll
                    if (history.pushState) {
                        history.pushState(null, null, href);
                    }
                }
            });
        });
    }

    /**
     * Add animation classes when elements come into view
     */
    function initScrollAnimations() {
        // Only run if IntersectionObserver is supported
        if (!('IntersectionObserver' in window)) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all elements with data-animate attribute
        const animateElements = document.querySelectorAll('[data-animate]');
        animateElements.forEach(el => observer.observe(el));
    }

})();
