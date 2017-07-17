'use strict';

import throttle from 'lodash/throttle';
import smoothScroll from './smooth-scroll';

const page = document.querySelector('html');

export default function({
    mobileMenu = document.querySelector('#mobile-menu'),
    navigation = document.querySelectorAll('header .page-navigation a'),
    sections = document.querySelectorAll('.section')
} = {}) {

    mobileMenu.addEventListener('click', toggleNavigation);

    navigation.forEach(function(navItem){
        navItem.addEventListener('click', function(e){
            e.preventDefault();
            smoothScroll({
                trigger: this
            });
            if(page.classList.contains('show-navigation')){
                toggleNavigation();
            }
        });
    });

    window.addEventListener('load', function(){
        activeSection(sections, navigation);
    });

    window.addEventListener('scroll', throttle(() => {
        activeSection(sections, navigation);
    }, 250));
}

function toggleNavigation(){
    page.classList.toggle('show-navigation');
}

function activeSection(sections, navItems){
    sections.forEach(function(section){
        let sectionPosition = section.getBoundingClientRect();
        if(-200 <= sectionPosition.top && sectionPosition.top <= 200){
            navItems.forEach(function(navItem){
                if(section.id == navItem.href.split('#')[1]){
                    navItem.classList.add('active');
                }else{
                    navItem.classList.remove('active');
                }
            });
        }
    });
}
