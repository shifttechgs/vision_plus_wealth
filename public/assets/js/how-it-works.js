/**
 * VisionPlus Wealth - How It Works Section
 * Enhanced JavaScript Interactions
 * Modern, Minimalistic Design
 */

(function ($) {
    'use strict';

    // Wait for DOM to be fully loaded
    $(document).ready(function () {

        /**
         * Intersection Observer for Progress Bar Animation
         */
        const progressObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBar = entry.target.querySelector('.vpw-progress-bar');
                        if (progressBar) {
                            // Trigger animation by adding a class
                            progressBar.style.width = '100%';
                        }
                        // Unobserve after triggering once
                        progressObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.3, // Trigger when 30% of section is visible
                rootMargin: '0px'
            }
        );

        // Observe the How It Works section
        const howItWorksSection = document.querySelector('.vpw-how-it-works');
        if (howItWorksSection) {
            progressObserver.observe(howItWorksSection);
        }

        /**
         * Card Entrance Animation on Scroll
         */
        const cardObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        cardObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.2,
                rootMargin: '0px 0px -50px 0px'
            }
        );

        // Observe all step cards
        const stepCards = document.querySelectorAll('.vpw-step-card');
        stepCards.forEach(card => {
            cardObserver.observe(card);
        });

        /**
         * Smooth Scroll Enhancement for CTA Button
         */
        $('.vpw-how-it-works a[href^="#"]').on('click', function (e) {
            const target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 800, 'swing');
            }
        });

        /**
         * Add micro-interaction on step number hover
         */
        $('.vpw-step-number').on('mouseenter', function () {
            const icon = $(this).find('i');
            icon.css('transform', 'scale(1.15) rotate(5deg)');
        }).on('mouseleave', function () {
            const icon = $(this).find('i');
            icon.css('transform', 'scale(1) rotate(0deg)');
        });

        /**
         * Sequential Animation for Step Cards (Mobile)
         */
        if (window.innerWidth < 768) {
            stepCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 150);
            });
        }

        /**
         * Progress Line Dynamic Width Adjustment
         */
        function adjustProgressLine() {
            const progressLine = document.querySelector('.vpw-progress-line');
            if (progressLine && window.innerWidth >= 992) {
                const container = document.querySelector('.vpw-how-it-works .container');
                const firstCard = document.querySelector('.vpw-step-card');
                const lastCard = document.querySelectorAll('.vpw-step-card')[3];

                if (container && firstCard && lastCard) {
                    const containerRect = container.getBoundingClientRect();
                    const firstRect = firstCard.getBoundingClientRect();
                    const lastRect = lastCard.getBoundingClientRect();

                    const leftOffset = firstRect.left + firstRect.width / 2 - containerRect.left;
                    const rightOffset = containerRect.right - (lastRect.left + lastRect.width / 2);

                    const totalWidth = containerRect.width - leftOffset - rightOffset;
                    const widthPercent = (totalWidth / containerRect.width) * 100;

                    progressLine.style.width = widthPercent + '%';
                    progressLine.style.left = '50%';
                    progressLine.style.transform = 'translateX(-50%)';
                }
            }
        }

        // Adjust on load and resize
        adjustProgressLine();
        let resizeTimer;
        $(window).on('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(adjustProgressLine, 250);
        });

        /**
         * Add subtle parallax effect to background pattern
         */
        if (window.innerWidth >= 1024) {
            $(window).on('scroll', function () {
                const scrolled = $(window).scrollTop();
                const sectionOffset = $('.vpw-how-it-works').offset();

                if (sectionOffset) {
                    const section = $('.vpw-how-it-works');
                    const sectionTop = sectionOffset.top;
                    const sectionHeight = section.outerHeight();
                    const windowHeight = $(window).height();

                    // Check if section is in viewport
                    if (scrolled + windowHeight > sectionTop && scrolled < sectionTop + sectionHeight) {
                        const parallaxSpeed = 0.3;
                        const yPos = -(scrolled - sectionTop) * parallaxSpeed;
                        section.find('> div:first-child').css('transform', 'translateY(' + yPos + 'px)');
                    }
                }
            });
        }

        /**
         * Accessibility: Keyboard Navigation Enhancement
         */
        $('.vpw-step-card').on('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                $(this).find('a').click();
            }
        });

        /**
         * Performance: Debounce Function
         */
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

        /**
         * Analytics: Track Section View (Optional - integrate with your analytics)
         */
        const analyticsObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Example: Send event to Google Analytics
                        if (typeof gtag !== 'undefined') {
                            gtag('event', 'section_view', {
                                'section_name': 'How It Works'
                            });
                        }
                        analyticsObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.5 }
        );

        if (howItWorksSection) {
            analyticsObserver.observe(howItWorksSection);
        }

        /**
         * Easter Egg: Add subtle glow effect on multiple clicks (fun detail)
         */
        let clickCount = 0;
        $('.vpw-step-number').on('click', function () {
            clickCount++;
            if (clickCount === 5) {
                $(this).css({
                    'animation': 'pulse 0.5s ease-in-out 3',
                    'box-shadow': '0 0 30px rgba(158, 221, 5, 0.8)'
                });
                setTimeout(() => {
                    $(this).css('box-shadow', '');
                    clickCount = 0;
                }, 2000);
            }
        });

        // Add pulse animation via CSS
        if (!document.getElementById('pulse-animation-style')) {
            const style = document.createElement('style');
            style.id = 'pulse-animation-style';
            style.innerHTML = `
                @keyframes pulse {
                    0%, 100% { transform: scale(1); }
                    50% { transform: scale(1.1); }
                }
            `;
            document.head.appendChild(style);
        }

        console.log('VisionPlus Wealth - How It Works Section: Enhanced interactions loaded ✓');

    });

})(jQuery);
