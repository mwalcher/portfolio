'use strict';

import throttle from 'lodash/throttle';

const page = document.querySelector('html');

export default function({
    mobileMenu = requiredField('Mobile Menu'),
    navigation = requiredField('Main Navigation'),
    sections = [],
    openNavigationClass = 'show-navigation'
} = {}) {
    const navigationItems = navigation.querySelectorAll('a');

    mobileMenu.addEventListener('click', () =>
        toggleNavigation(openNavigationClass)
    );

    navigationItems.forEach(navItem => {
        if (navItem.href.indexOf('#') !== -1) {
            navItem.addEventListener('click', () => {
                if (page.classList.contains(openNavigationClass)) {
                    toggleNavigation(openNavigationClass);
                }
            });
        }
    });

    window.addEventListener('load', () =>
        activeSection(sections, navigation, navigationItems)
    );
    window.addEventListener(
        'scroll',
        throttle(
            () => activeSection(sections, navigation, navigationItems),
            250
        )
    );
}

function toggleNavigation(className) {
    page.classList.toggle(className);
}

function activeSection(sections, navigation, navigationItems) {
    const scrollPosition = window.pageYOffset;
    const windowHeight = window.innerHeight;
    const className = 'active';

    sections.forEach(section => {
        let sectionPosition = section.getBoundingClientRect();
        let sectionOffset = section.offsetTop;
        let sectionHeight = section.offsetHeight;

        let sectionStart = sectionOffset - windowHeight / 2;
        if (sectionOffset <= 0) {
            sectionStart = 0;
        }

        let sectionEnd = sectionOffset + (sectionHeight - windowHeight / 2);

        if (scrollPosition >= sectionStart && scrollPosition < sectionEnd) {
            navigationItems.forEach(navItem => {
                if (section.id === navItem.href.split('#')[1]) {
                    navItem.classList.add(className);
                } else {
                    navItem.classList.remove(className);
                }
            });
        }

        if (section.classList.contains('light-section')) {
            navigationColour(navigation, sectionPosition, navigationItems);
        }
    });
}

function navigationColour(navigation, position, navigationItems) {
    const logo = document.querySelector('header .logo');
    const navigationTitle = document.querySelector('.main-navigation h2');
    const darkClass = 'dark';
    const darkTopClass = 'dark-top';
    const darkBottomClass = 'dark-bottom';

    let top = position.top;
    let bottom = position.bottom;

    // Logo
    if (top < 56 && bottom > 56) {
        logo.classList.add(darkClass);
    } else {
        logo.classList.remove(darkClass);
    }

    // Title
    if (top < 114 && bottom > 114) {
        navigationTitle.classList.add(darkClass);
    } else {
        navigationTitle.classList.remove(darkClass);
    }

    // Navigation
    navigationItems.forEach((navItem, index) => {
        let offset = 198 + 64 * index;

        if (top < offset && bottom > offset) {
            navItem.parentNode.classList.add(darkClass);
            if (index === 0) {
                navigation.classList.add(darkTopClass);
            } else if (index === navigationItems.length - 1) {
                navigation.classList.add(darkBottomClass);
            }
        } else {
            navItem.parentNode.classList.remove(darkClass);
            if (index === 0) {
                navigation.classList.remove(darkTopClass);
            } else if (index === navigationItems.length - 1) {
                navigation.classList.remove(darkBottomClass);
            }
        }
    });
}

function requiredField(field) {
    throw new Error(`[${field}] is required`);
}
