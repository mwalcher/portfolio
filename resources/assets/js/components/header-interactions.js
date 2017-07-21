'use strict';

import throttle from 'lodash/throttle';
import smoothScroll from './smooth-scroll';

const page = document.querySelector('html');

export default function({
    mobileMenu = requiredField('Mobile Menu'),
    navigation = requiredField('Main Navigation'),
    sections = []
} = {}) {

    const navigationItems = navigation.querySelectorAll('a');

    mobileMenu.addEventListener('click', toggleNavigation);

    navigationItems.forEach(function(navItem){
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

function activeSection(sections, navigation){
    const navigationItems = navigation.querySelectorAll('a');

    sections.forEach(function(section){
        let sectionPosition = section.getBoundingClientRect();
        if(-200 <= sectionPosition.top && sectionPosition.top <= 200){
            navigationItems.forEach(function(navItem){
                if(section.id == navItem.href.split('#')[1]){
                    navItem.classList.add('active');
                }else{
                    navItem.classList.remove('active');
                }
            });
        }
        if(section.classList.contains('light-section')){
            navigationColour(navigation, sectionPosition);
        }
    });
}

function navigationColour(navigation, position){
    const logo = document.querySelector('header .logo');
    const navigationTitle = document.querySelector('.main-navigation h2');
    const navigationItems = navigation.querySelectorAll('a');

    let top = position.top;
    let bottom = position.bottom;

    // Logo
    if(top < 56 && bottom > 56){
        logo.classList.add('dark');
    }else{
        logo.classList.remove('dark');
    }

    // Title
    if(top < 114 && bottom > 114){
        navigationTitle.classList.add('dark');
    }else{
        navigationTitle.classList.remove('dark');
    }

    // Navigation
    navigationItems.forEach(function(navItem, index) {
        let offset = 198 + (64 * (index));

        if(top < offset && bottom > offset){
            navItem.parentNode.classList.add('dark');
            if(index == 0){
                navigation.classList.add('dark-top');
            }else if(index == (navigationItems.length - 1)){
                navigation.classList.add('dark-bottom');
            }
        }else{
            navItem.parentNode.classList.remove('dark');
            if(index == 0){
                navigation.classList.remove('dark-top');
            }else if(index == (navigationItems.length - 1)){
                navigation.classList.remove('dark-bottom');
            }
        }
    });
}

function requiredField(field){
    throw new Error(`[${field}] is required`);
}
