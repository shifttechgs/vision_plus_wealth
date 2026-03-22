/**
 * VisionPlus Wealth — FAQ Accordion
 */
(function () {
    'use strict';

    var items = document.querySelectorAll('.vpw-accordion-item');
    if (!items.length) return;

    items.forEach(function (item) {
        var trigger = item.querySelector('.vpw-accordion-trigger');
        var panel = item.querySelector('.vpw-accordion-panel');
        if (!trigger || !panel) return;

        trigger.addEventListener('click', function () {
            var isOpen = item.classList.contains('active');

            // Close all
            items.forEach(function (other) {
                other.classList.remove('active');
                var otherTrigger = other.querySelector('.vpw-accordion-trigger');
                var otherPanel = other.querySelector('.vpw-accordion-panel');
                if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
                if (otherPanel) otherPanel.hidden = true;
            });

            // Open clicked (if it was closed)
            if (!isOpen) {
                item.classList.add('active');
                trigger.setAttribute('aria-expanded', 'true');
                panel.hidden = false;
            }
        });
    });
})();
