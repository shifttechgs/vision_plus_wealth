/**
 * VisionPlus Wealth — How It Works
 * Minimal JS: scroll-triggered entrance only
 */
(function () {
    'use strict';

    if (!('IntersectionObserver' in window)) return;

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.hiw-step').forEach(function (el) {
        observer.observe(el);
    });
})();
