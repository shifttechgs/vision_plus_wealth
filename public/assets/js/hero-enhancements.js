/**
 * Hero Section Enhancements - Interactive Features
 * VisionPlus Wealth
 */

(function() {
    'use strict';

    // Initialize all features when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initOfferBanner();
        initAmountSelector();
        initLiveActivity();
        initOfferCountdown();
        initCTATracking();
    });

    /**
     * Offer Banner Management
     */
    function initOfferBanner() {
        const offerBannerWrapper = document.querySelector('.offer-banner-wrapper');
        const offerClose = document.getElementById('offerClose');

        if (!offerBannerWrapper || !offerClose) {
            console.warn('Offer banner elements not found');
            return;
        }

        // Check if banner was previously closed
        const bannerClosed = sessionStorage.getItem('offerBannerClosed');
        if (bannerClosed === 'true') {
            // Hide immediately on page load
            offerBannerWrapper.style.display = 'none';
            offerBannerWrapper.classList.add('hidden');
        }

        // Close button handler
        offerClose.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Add visual feedback
            offerClose.style.transform = 'translateY(-50%) scale(0.9)';

            setTimeout(function() {
                // Apply hidden class for smooth animation
                offerBannerWrapper.classList.add('hidden');
                sessionStorage.setItem('offerBannerClosed', 'true');
                trackEvent('Offer Banner', 'Closed');

                // After animation completes, hide completely
                setTimeout(function() {
                    offerBannerWrapper.style.display = 'none';
                }, 400);
            }, 100);

            // Adjust header position if needed
            adjustHeaderPosition();
        });

        // Track banner view
        if (bannerClosed !== 'true') {
            trackEvent('Offer Banner', 'Viewed');
        }

        console.log('✓ Offer Banner initialized');
    }

    /**
     * Adjust header position when banner is closed
     */
    function adjustHeaderPosition() {
        const header = document.getElementById('vl-header-sticky');
        if (header) {
            // Smoothly adjust any sticky header positioning
            setTimeout(function() {
                window.dispatchEvent(new Event('resize'));
            }, 400);
        }
    }

    /**
     * Quick Amount Selector
     */
    function initAmountSelector() {
        const amountButtons = document.querySelectorAll('.amount-btn');
        const monthlyEstimate = document.querySelector('.monthly-estimate');

        if (!amountButtons.length || !monthlyEstimate) return;

        amountButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                amountButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Get selected amount
                const amount = parseInt(this.dataset.amount);

                // Calculate estimated monthly payment
                // Using: 12 months term, 10% annual interest rate
                const monthlyPayment = calculateMonthlyPayment(amount, 12, 10);

                // Update display with animation
                animateValue(monthlyEstimate, parseFloat(monthlyEstimate.textContent.replace(/[^0-9.]/g, '')), monthlyPayment, 500);

                // Track selection
                trackEvent('Amount Selected', amount);
            });
        });
    }

    /**
     * Calculate monthly loan payment
     */
    function calculateMonthlyPayment(principal, months, annualRate) {
        const monthlyRate = annualRate / 100 / 12;

        if (monthlyRate === 0) {
            return principal / months;
        }

        const payment = principal * (monthlyRate * Math.pow(1 + monthlyRate, months)) /
                       (Math.pow(1 + monthlyRate, months) - 1);

        return payment;
    }

    /**
     * Animate number value change
     */
    function animateValue(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;

        const timer = setInterval(function() {
            current += increment;
            if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                current = end;
                clearInterval(timer);
            }
            element.textContent = '$' + Math.round(current).toLocaleString();
        }, 16);
    }

    /**
     * Live Activity Rotation
     */
    function initLiveActivity() {
        const liveActivityElement = document.getElementById('liveActivity');

        if (!liveActivityElement) return;

        const activities = [
            { name: 'Sarah M.', location: 'Harare', amount: '$15,000' },
            { name: 'John T.', location: 'Bulawayo', amount: '$25,000' },
            { name: 'Mary K.', location: 'Mutare', amount: '$8,500' },
            { name: 'David N.', location: 'Gweru', amount: '$12,000' },
            { name: 'Grace P.', location: 'Harare', amount: '$20,000' },
            { name: 'Peter M.', location: 'Masvingo', amount: '$30,000' },
            { name: 'Linda C.', location: 'Harare', amount: '$18,500' },
            { name: 'James R.', location: 'Bulawayo', amount: '$22,000' }
        ];

        let currentIndex = 0;

        function rotateActivity() {
            const activity = activities[currentIndex];

            // Fade out
            liveActivityElement.style.opacity = '0';

            setTimeout(function() {
                // Update content
                liveActivityElement.innerHTML = `
                    <strong>${activity.name}</strong> from ${activity.location} just got approved for ${activity.amount}
                `;

                // Fade in
                liveActivityElement.style.opacity = '1';

                // Move to next activity
                currentIndex = (currentIndex + 1) % activities.length;
            }, 300);
        }

        // Set transition
        liveActivityElement.style.transition = 'opacity 0.3s ease';

        // Rotate every 5 seconds
        setInterval(rotateActivity, 5000);

        // Initial rotation after 3 seconds
        setTimeout(rotateActivity, 3000);
    }

    /**
     * Offer Countdown Timer
     */
    function initOfferCountdown() {
        const countdownElement = document.getElementById('offerCountdown');

        if (!countdownElement) return;

        // Set end date (5 days from now)
        const endDate = new Date();
        endDate.setDate(endDate.getDate() + 5);
        endDate.setHours(23, 59, 59, 999);

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = endDate - now;

            if (distance < 0) {
                countdownElement.innerHTML = 'Offer ended!';
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElement.innerHTML = `Ends in: <strong>${days}d ${hours}h ${minutes}m ${seconds}s</strong>`;
        }

        // Update every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    /**
     * CTA Button Click Tracking
     */
    function initCTATracking() {
        const primaryCTA = document.querySelector('.btn-primary-cta');
        const secondaryCTA = document.querySelector('.btn-secondary-cta');

        if (primaryCTA) {
            primaryCTA.addEventListener('click', function(e) {
                trackEvent('CTA Click', 'Get My Loan Now');

                // Add loading state (optional)
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';

                // You can prevent default and handle with AJAX if needed
                // e.preventDefault();
            });
        }

        if (secondaryCTA) {
            secondaryCTA.addEventListener('click', function() {
                trackEvent('CTA Click', 'Call Us');
            });
        }
    }

    /**
     * Event Tracking Helper
     */
    function trackEvent(action, label) {
        // Google Analytics
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                'event_category': 'Hero Section',
                'event_label': label
            });
        }

        // Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('track', action, { label: label });
        }

        // Console log for development
        console.log('Event Tracked:', action, label);
    }

    /**
     * Add urgency counter animation
     */
    function animateUrgencyCounter() {
        const urgencyTag = document.querySelector('.urgency-tag strong');

        if (!urgencyTag) return;

        // Start at current number
        let startNumber = parseInt(urgencyTag.textContent);

        // Increment by 1 every 10 minutes
        setInterval(function() {
            startNumber += 1;
            urgencyTag.textContent = startNumber + ' people';
        }, 600000); // 10 minutes
    }

    // Start urgency counter
    setTimeout(animateUrgencyCounter, 1000);

    /**
     * Floating cards parallax effect
     */
    function initParallaxEffect() {
        const floatingCards = document.querySelectorAll('.floating-stat-card');

        if (!floatingCards.length) return;

        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;

            floatingCards.forEach((card, index) => {
                const speed = 0.5 + (index * 0.1);
                const yPos = -(scrolled * speed);
                card.style.transform = `translateY(${yPos}px)`;
            });
        });
    }

    // Only enable parallax on desktop
    if (window.innerWidth > 1024) {
        initParallaxEffect();
    }

    /**
     * Add entrance animations on scroll
     */
    function initScrollAnimations() {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, {
            threshold: 0.1
        });

        // Observe elements
        const animateElements = document.querySelectorAll(
            '.quick-amount-selector, .guarantee-badge, .live-activity'
        );

        animateElements.forEach(element => {
            observer.observe(element);
        });
    }

    initScrollAnimations();

    /**
     * Smart CTA button behavior
     */
    function enhanceCTAButtons() {
        const primaryCTA = document.querySelector('.btn-primary-cta');

        if (!primaryCTA) return;

        // Add hover sound effect (optional, needs sound file)
        primaryCTA.addEventListener('mouseenter', function() {
            // Play subtle hover sound if you have one
            // new Audio('/assets/sounds/hover.mp3').play();
        });

        // Add success feedback on click
        primaryCTA.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            ripple.classList.add('ripple-effect');
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    }

    enhanceCTAButtons();

    /**
     * Exit Intent Popup (Optional - for maximum conversion)
     */
    let exitIntentShown = false;

    function initExitIntent() {
        document.addEventListener('mouseleave', function(e) {
            if (e.clientY <= 0 && !exitIntentShown && window.innerWidth > 768) {
                exitIntentShown = true;

                // Show special offer modal or highlight CTA
                const primaryCTA = document.querySelector('.btn-primary-cta');
                if (primaryCTA) {
                    primaryCTA.style.animation = 'shake 0.5s';
                    setTimeout(() => {
                        primaryCTA.style.animation = '';
                    }, 500);
                }

                trackEvent('Exit Intent', 'Triggered');
            }
        });
    }

    // Enable exit intent after 10 seconds
    setTimeout(initExitIntent, 10000);

    /**
     * A/B Testing Helper (Optional)
     */
    function getVariant() {
        const variant = localStorage.getItem('heroVariant');

        if (!variant) {
            const newVariant = Math.random() < 0.5 ? 'A' : 'B';
            localStorage.setItem('heroVariant', newVariant);
            return newVariant;
        }

        return variant;
    }

    // Log variant for analytics
    console.log('Hero Variant:', getVariant());

    /**
     * Add CSS for ripple effect
     */
    const style = document.createElement('style');
    style.textContent = `
        .ripple-effect {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
            animation: ripple 0.6s;
            pointer-events: none;
        }

        @keyframes ripple {
            from {
                opacity: 1;
                transform: scale(0);
            }
            to {
                opacity: 0;
                transform: scale(2);
            }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .animate-in {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(style);

    /**
     * Performance Monitoring
     */
    window.addEventListener('load', function() {
        if (window.performance && window.performance.timing) {
            const loadTime = window.performance.timing.loadEventEnd - window.performance.timing.navigationStart;
            console.log('Hero Section Load Time:', (loadTime / 1000).toFixed(2) + 's');

            // Track if load time is good
            if (loadTime < 3000) {
                trackEvent('Performance', 'Fast Load');
            }
        }
    });

    /**
     * Keyboard accessibility
     */
    document.addEventListener('keydown', function(e) {
        // Press 'A' to focus on primary CTA
        if (e.key === 'a' || e.key === 'A') {
            const primaryCTA = document.querySelector('.btn-primary-cta');
            if (primaryCTA && document.activeElement !== primaryCTA) {
                primaryCTA.focus();
            }
        }
    });

    // Log successful initialization
    console.log('%c✓ Hero Enhancements Loaded', 'color: #10b981; font-weight: bold; font-size: 14px;');
    console.log('%cVisionPlus Wealth - High Converting Hero Section', 'color: #4d61d6; font-size: 12px;');

})();

/**
 * Optional: Add smooth reveal for elements
 */
window.addEventListener('load', function() {
    const heroSection = document.querySelector('.hero4-section-area');
    if (heroSection) {
        heroSection.style.opacity = '0';
        setTimeout(function() {
            heroSection.style.transition = 'opacity 0.8s ease';
            heroSection.style.opacity = '1';
        }, 100);
    }
});

/**
 * Premium Auto-Scrolling Value Banner
 * Pure CSS animation - no JavaScript needed!
 * Auto-scrolls horizontally with seamless infinite loop
 */
console.log('✓ Auto-scrolling value banner loaded (CSS-only animation)');
