'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

import headerInteractions from './components/header-interactions';
import formInteractions from './components/form-interactions';

document.addEventListener('readystatechange', function(){
    if(document.readyState === 'complete'){

        // Header Component
        headerInteractions({
            mobileMenu: document.querySelector('#mobile-menu'),
            navigation: document.querySelectorAll('header .page-navigation a'),
            sections: document.querySelectorAll('.section')
        });

        // Forms
        formInteractions({
            inputs: document.querySelectorAll('input, textarea')
        });
    }
});
