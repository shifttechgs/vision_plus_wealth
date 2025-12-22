/**
 * VisionPlus Wealth - Landing Page JavaScript
 * High-Converting Interactive Features
 */

(function() {
    'use strict';

    // ========== Initialize Everything on DOM Load ==========
    document.addEventListener('DOMContentLoaded', function() {
        initPreloader();
        initNavigation();
        initScrollProgress();
        initSmoothScroll();
        initAnimations();
        initTypedText();
        initLoanCalculator();
        initFAQ();
        initScrollAnimations();
    });

    // ========== Preloader ==========
    function initPreloader() {
        const preloader = document.getElementById('preloader');

        window.addEventListener('load', function() {
            setTimeout(function() {
                preloader.classList.add('hidden');
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500);
            }, 500);
        });
    }

    // ========== Navigation ==========
    function initNavigation() {
        const header = document.getElementById('header');
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');
        const navLinks = document.querySelectorAll('.nav-link');

        // Sticky header on scroll
        let lastScroll = 0;
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            lastScroll = currentScroll;
        });

        // Mobile menu toggle
        if (hamburger) {
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
                document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
            });
        }

        // Close mobile menu when clicking on links
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (navMenu.classList.contains('active')) {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Active link on scroll
        const sections = document.querySelectorAll('section[id]');

        window.addEventListener('scroll', function() {
            const scrollY = window.pageYOffset;

            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100;
                const sectionId = section.getAttribute('id');
                const navLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    if (navLink) {
                        navLink.classList.add('active');
                    }
                }
            });
        });
    }

    // ========== Scroll Progress ==========
    function initScrollProgress() {
        const progressWrap = document.querySelector('.progress-wrap');
        const progressPath = document.querySelector('.progress-wrap svg path');

        if (!progressWrap || !progressPath) return;

        const pathLength = progressPath.getTotalLength();
        progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
        progressPath.style.strokeDashoffset = pathLength;

        window.addEventListener('scroll', function() {
            const scroll = window.pageYOffset;
            const height = document.documentElement.scrollHeight - window.innerHeight;
            const progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;

            // Show/hide progress button
            if (scroll > 300) {
                progressWrap.classList.add('active');
            } else {
                progressWrap.classList.remove('active');
            }
        });

        // Scroll to top on click
        progressWrap.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ========== Smooth Scroll ==========
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if it's just "#" or "#apply"
                if (href === '#' || href === '#apply') {
                    e.preventDefault();
                    return;
                }

                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();
                    const headerHeight = document.getElementById('header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // ========== AOS Animations ==========
    function initAnimations() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        }
    }

    // ========== Typed Text Effect ==========
    function initTypedText() {
        const typedElement = document.querySelector('.typed-text');

        if (typedElement && typeof Typed !== 'undefined') {
            new Typed('.typed-text', {
                strings: [
                    'Smart, Flexible Solutions',
                    'Fast Loan Approvals',
                    'High-Growth Investments',
                    'Expert Financial Advice'
                ],
                typeSpeed: 80,
                backSpeed: 50,
                backDelay: 2000,
                loop: true,
                showCursor: true,
                cursorChar: '|'
            });
        }
    }

    // ========== Loan Calculator ==========
    function initLoanCalculator() {
        const loanAmount = document.getElementById('loanAmount');
        const loanTerm = document.getElementById('loanTerm');
        const interestRate = document.getElementById('interestRate');

        const loanAmountValue = document.getElementById('loanAmountValue');
        const loanTermValue = document.getElementById('loanTermValue');
        const interestRateValue = document.getElementById('interestRateValue');

        const monthlyPayment = document.getElementById('monthlyPayment');
        const totalAmount = document.getElementById('totalAmount');
        const totalInterest = document.getElementById('totalInterest');

        if (!loanAmount || !loanTerm || !interestRate) return;

        function formatCurrency(amount) {
            return '$' + amount.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }

        function calculateLoan() {
            const principal = parseFloat(loanAmount.value);
            const months = parseInt(loanTerm.value);
            const annualRate = parseFloat(interestRate.value);
            const monthlyRate = annualRate / 100 / 12;

            // Calculate monthly payment using the formula:
            // M = P * [r(1+r)^n] / [(1+r)^n - 1]
            let monthly;
            if (monthlyRate === 0) {
                monthly = principal / months;
            } else {
                monthly = principal * (monthlyRate * Math.pow(1 + monthlyRate, months)) /
                         (Math.pow(1 + monthlyRate, months) - 1);
            }

            const total = monthly * months;
            const interest = total - principal;

            // Update display
            loanAmountValue.textContent = formatCurrency(principal);
            loanTermValue.textContent = months + ' months';
            interestRateValue.textContent = annualRate + '%';

            monthlyPayment.textContent = formatCurrency(monthly);
            totalAmount.textContent = formatCurrency(total);
            totalInterest.textContent = formatCurrency(interest);

            // Animate the result
            animateValue(monthlyPayment, 0, monthly, 800);
        }

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
                element.textContent = formatCurrency(current);
            }, 16);
        }

        // Event listeners
        loanAmount.addEventListener('input', calculateLoan);
        loanTerm.addEventListener('input', calculateLoan);
        interestRate.addEventListener('input', calculateLoan);

        // Initial calculation
        calculateLoan();
    }

    // ========== FAQ Accordion ==========
    function initFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');

                // Close all items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                });

                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        });
    }

    // ========== Scroll Animations ==========
    function initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements with animation classes
        const animatedElements = document.querySelectorAll(
            '.highlight-card, .service-card, .testimonial-card, .step, .feature-box, .resource-card'
        );

        animatedElements.forEach(element => {
            observer.observe(element);
        });
    }

    // ========== Form Validation (for future contact forms) ==========
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePhone(phone) {
        const re = /^[\d\s\-\+\(\)]+$/;
        return re.test(phone) && phone.replace(/\D/g, '').length >= 10;
    }

    // ========== Conversion Tracking (for analytics) ==========
    function trackConversion(action, label) {
        // Google Analytics or other tracking
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                'event_category': 'Conversion',
                'event_label': label
            });
        }

        // Facebook Pixel
        if (typeof fbq !== 'undefined') {
            fbq('track', action, { label: label });
        }

        console.log('Conversion tracked:', action, label);
    }

    // Track CTA clicks
    document.querySelectorAll('.btn-primary').forEach(btn => {
        btn.addEventListener('click', function() {
            const buttonText = this.textContent.trim();
            trackConversion('CTAClick', buttonText);
        });
    });

    // ========== Exit Intent Popup (Optional - for high conversion) ==========
    let exitIntentShown = false;

    document.addEventListener('mouseleave', function(e) {
        if (e.clientY <= 0 && !exitIntentShown && window.innerWidth > 768) {
            exitIntentShown = true;
            // Show exit intent popup
            // You can implement a modal here
            console.log('Exit intent detected - show special offer');
        }
    });

    // ========== Live Chat Toggle (if implementing live chat) ==========
    function initLiveChat() {
        // Placeholder for live chat integration
        // This can be connected to Tawk.to, Intercom, or custom chat
    }

    // ========== Utility Functions ==========
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

    function throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    // ========== Performance Optimization ==========
    // Lazy load images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // ========== Accessibility Enhancements ==========
    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        // ESC key to close mobile menu
        if (e.key === 'Escape') {
            const navMenu = document.getElementById('navMenu');
            const hamburger = document.getElementById('hamburger');

            if (navMenu && navMenu.classList.contains('active')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });

    // Focus trap for mobile menu
    function trapFocus(element) {
        const focusableElements = element.querySelectorAll(
            'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled])'
        );
        const firstFocusable = focusableElements[0];
        const lastFocusable = focusableElements[focusableElements.length - 1];

        element.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
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
            }
        });
    }

    // ========== Cookie Consent (Optional) ==========
    function initCookieConsent() {
        const cookieConsent = localStorage.getItem('cookieConsent');

        if (!cookieConsent) {
            // Show cookie consent banner
            // You can implement a banner here
            console.log('Show cookie consent');
        }
    }

    // ========== A/B Testing Helper (Optional) ==========
    function getABTestVariant() {
        const variant = localStorage.getItem('abTestVariant');

        if (!variant) {
            const newVariant = Math.random() < 0.5 ? 'A' : 'B';
            localStorage.setItem('abTestVariant', newVariant);
            return newVariant;
        }

        return variant;
    }

    // ========== Real-time Visitor Counter (Optional) ==========
    function updateVisitorCount() {
        // This would connect to a backend API
        // For demo purposes, we'll use a random number
        const count = Math.floor(Math.random() * 50) + 100;

        const visitorCounters = document.querySelectorAll('.visitor-count');
        visitorCounters.forEach(counter => {
            counter.textContent = count;
        });
    }

    // ========== Countdown Timer (for limited offers) ==========
    function initCountdown(targetDate) {
        const countdownElements = document.querySelectorAll('[data-countdown]');

        if (countdownElements.length === 0) return;

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            countdownElements.forEach(element => {
                element.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            });

            if (distance < 0) {
                countdownElements.forEach(element => {
                    element.innerHTML = 'EXPIRED';
                });
            }
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // ========== Social Proof Notifications ==========
    function showSocialProofNotification() {
        const names = ['John M.', 'Sarah K.', 'David L.', 'Mary T.', 'James W.'];
        const actions = [
            'just applied for a business loan',
            'just opened an investment account',
            'just received loan approval',
            'just started a savings plan'
        ];

        const notification = document.createElement('div');
        notification.className = 'social-proof-notification';
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas fa-check-circle"></i>
                <div>
                    <strong>${names[Math.floor(Math.random() * names.length)]}</strong>
                    ${actions[Math.floor(Math.random() * actions.length)]}
                </div>
            </div>
        `;

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.add('show');
        }, 100);

        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 500);
        }, 5000);
    }

    // Show social proof every 15 seconds
    if (window.innerWidth > 768) {
        setInterval(showSocialProofNotification, 15000);
        setTimeout(showSocialProofNotification, 3000); // Show first one after 3 seconds
    }

    // ========== Console Welcome Message ==========
    console.log('%c👋 Welcome to VisionPlus Wealth!', 'color: #4d61d6; font-size: 20px; font-weight: bold;');
    console.log('%cEmpowering Your Financial Journey', 'color: #07294e; font-size: 14px;');

})();

// ========== Social Proof Notification Styles (inject dynamically) ==========
const style = document.createElement('style');
style.textContent = `
    .social-proof-notification {
        position: fixed;
        bottom: 30px;
        left: 30px;
        background: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        z-index: 9998;
        transform: translateX(-400px);
        transition: transform 0.5s ease;
        max-width: 350px;
        border-left: 4px solid #4d61d6;
    }

    .social-proof-notification.show {
        transform: translateX(0);
    }

    .notification-content {
        display: flex;
        align-items: center;
        gap: 1rem;
        font-size: 0.9rem;
        color: #374151;
    }

    .notification-content i {
        color: #10b981;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    @media (max-width: 768px) {
        .social-proof-notification {
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            bottom: 20px;
            width: calc(100% - 40px);
            max-width: none;
        }

        .social-proof-notification.show {
            transform: translateX(-50%) translateY(0);
        }
    }
`;
document.head.appendChild(style);
