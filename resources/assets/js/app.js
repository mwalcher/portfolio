'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

import headerInteractions from './components/header-interactions';
import formInteractions from './components/form-interactions';
import toggleActive from './components/toggle-active';

document.addEventListener('readystatechange', function(){
    if(document.readyState === 'complete'){

        const navigation = document.querySelector('header .main-navigation');

        if(navigation){
            // Header Component
            headerInteractions({
                mobileMenu: document.querySelector('#mobile-menu'),
                navigation: document.querySelector('header .page-navigation'),
                sections: document.querySelectorAll('.section')
            });
        }

        // Forms
        formInteractions({
            inputs: document.querySelectorAll('input, textarea')
        });

        // Toggle Active
        toggleActive({
            triggers: document.querySelectorAll('[data-toggle]'),
            toggleContent: document.querySelectorAll('[data-toggle-content]')
        });
    }
});
