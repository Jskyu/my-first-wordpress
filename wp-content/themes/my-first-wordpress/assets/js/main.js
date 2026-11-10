/**
 * My First WordPress Theme - Main JavaScript
 * 성능 최적화된 스크립트
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle aria-expanded
            this.setAttribute('aria-expanded', !isExpanded);

            // Toggle navigation
            navigation.classList.toggle('toggled');

            // Toggle menu icon
            const menuIcon = this.querySelector('.menu-icon');
            if (menuIcon) {
                menuIcon.textContent = navigation.classList.contains('toggled') ? '✕' : '☰';
            }

            // Prevent body scroll when menu is open
            document.body.style.overflow = navigation.classList.contains('toggled') ? 'hidden' : '';
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!navigation.contains(event.target) && !menuToggle.contains(event.target)) {
                if (navigation.classList.contains('toggled')) {
                    menuToggle.click();
                }
            }
        });

        // Close mobile menu when pressing Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && navigation.classList.contains('toggled')) {
                menuToggle.click();
            }
        });

        // Close mobile menu on window resize to desktop size
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768 && navigation.classList.contains('toggled')) {
                    menuToggle.click();
                }
            }, 250);
        });
    }

    // Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');

            // Skip if it's just '#'
            if (targetId === '#') {
                return;
            }

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();

                // Close mobile menu if open
                if (navigation && navigation.classList.contains('toggled')) {
                    menuToggle.click();
                }

                // Smooth scroll to target
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Update URL without jumping
                if (history.pushState) {
                    history.pushState(null, null, targetId);
                }
            }
        });
    });

    // Sticky Header on Scroll
    const header = document.querySelector('.site-header');
    let lastScrollTop = 0;
    const scrollThreshold = 100;

    if (header) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > scrollThreshold) {
                header.classList.add('scrolled');

                // Hide header on scroll down, show on scroll up
                if (scrollTop > lastScrollTop && scrollTop > 200) {
                    header.style.transform = 'translateY(-100%)';
                } else {
                    header.style.transform = 'translateY(0)';
                }
            } else {
                header.classList.remove('scrolled');
                header.style.transform = 'translateY(0)';
            }

            lastScrollTop = scrollTop;
        }, { passive: true });
    }

    // Lazy Load Images (for browsers that don't support native lazy loading)
    if ('loading' in HTMLImageElement.prototype) {
        // Browser supports native lazy loading
        console.log('Native lazy loading supported');
    } else {
        // Fallback to Intersection Observer
        const images = document.querySelectorAll('img[loading="lazy"]');

        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.add('loaded');
                        observer.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        } else {
            // Fallback: load all images immediately
            images.forEach(img => {
                img.src = img.dataset.src || img.src;
            });
        }
    }

    // Accessibility: Focus trap for mobile menu
    function trapFocus(element) {
        const focusableElements = element.querySelectorAll(
            'a[href], button, textarea, input, select, [tabindex]:not([tabindex="-1"])'
        );

        if (focusableElements.length === 0) return;

        const firstFocusable = focusableElements[0];
        const lastFocusable = focusableElements[focusableElements.length - 1];

        element.addEventListener('keydown', function(e) {
            if (e.key !== 'Tab') return;

            if (e.shiftKey) {
                if (document.activeElement === firstFocusable) {
                    lastFocusable.focus();
                    e.preventDefault();
                }
            } else {
                if (document.activeElement === lastFocusable) {
                    firstFocusable.focus();
                    e.preventDefault();
                }
            }
        });
    }

    if (navigation) {
        trapFocus(navigation);
    }

    // Add animation on scroll for elements
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements with animation class
    document.querySelectorAll('.feature-card, .post-card').forEach(el => {
        observer.observe(el);
    });

    // Performance: Debounce function
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Log page load time (for development)
    window.addEventListener('load', function() {
        if (window.performance) {
            const perfData = window.performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            console.log('Page load time: ' + pageLoadTime + 'ms');
        }
    });

    // Add loaded class to body when everything is ready
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('loaded');
    });

})();
