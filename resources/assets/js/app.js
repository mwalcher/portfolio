'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

import formInteractions from './components/form-interactions';
import headerInteractions from './components/header-interactions';
import showcaseSlider from './components/showcase-slider';
import smoothScroll from './components/smooth-scroll';
import toggleActive from './components/toggle-active';

document.addEventListener('readystatechange', function () {
    if (document.readyState === 'complete') {
        const page = document.querySelector('html');
        page.classList.add('page-loaded');

        // Header Component
        const navigation = document.querySelector('header .main-navigation');
        if (navigation) {
            headerInteractions({
                mobileMenu: document.querySelector('#mobile-menu'),
                navigation: document.querySelector('header .page-navigation'),
                sections: document.querySelectorAll('.section')
            });
        }

        // Smooth Scroll
        const anchorLinks = document.querySelectorAll('a[href*="#"]');
        anchorLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                smoothScroll({
                    trigger: link
                });
            });
        });

        // Forms
        formInteractions({
            forms: document.querySelectorAll('form'),
            inputs: document.querySelectorAll('input, textarea')
        });

        // Toggle Active
        toggleActive({
            triggers: document.querySelectorAll('[data-toggle]'),
            toggleContent: document.querySelectorAll('[data-toggle-content]')
        });

        // Showcase Slider
        showcaseSlider({
            sliders: document.querySelectorAll('.showcase-slider')
        });
    }
});
