'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

const page = document.querySelector('html');
const headerOffset = 80;
const headerBreakpoint = '740';

document.addEventListener('readystatechange', function(){
    if(document.readyState === 'complete'){
        // Header
        const mobileMenu = document.querySelector('#mobile-menu');
        mobileMenu.addEventListener('click', toggleNavigation);

        // Navigation
        const navigation = document.querySelectorAll('header .page-navigation a');
        const sections = document.querySelectorAll('.section');
        navigation.forEach(function(navItem){
            navItem.addEventListener('click', function(e){
                e.preventDefault();
                smoothScroll(this);
                if(page.classList.contains('show-navigation')){
                    toggleNavigation();
                }
            });
        });

        window.addEventListener('load', function(){
            activeSection(sections, navigation);
        });

        window.addEventListener('scroll', function(){
            activeSection(sections, navigation);
        });

        // Forms
        const inputs = document.querySelectorAll('input');
        const textareas = document.querySelectorAll('textarea');

        inputs.forEach(function(input){
            input.addEventListener('focus', activeInput);
            input.addEventListener('focusout', checkInput);
        });

        textareas.forEach(function(textarea){
            textarea.addEventListener('focus', activeInput);
            textarea.addEventListener('focusout', checkInput);
        });
    }
});

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

function smoothScroll(trigger){
    let windowPosition = window.pageYOffset;
    let targetID = trigger.href.split('#')[1];
    let target = document.getElementById(targetID);
    let targetOffset = target.offsetTop;
    let speed = 10;

    if(page.classList.contains('show-navigation') && !window.matchMedia(`(min-width: ${headerBreakpoint}px)`).matches){
        targetOffset = targetOffset - headerOffset;
    }

    let counter = setInterval(function() {
        windowPosition;

        if (windowPosition > targetOffset) {
            // from bottom to top
            window.scrollTo(0, windowPosition);
            windowPosition -= speed;

            // scrolling until targetOffset is higher than scrollbar position, cancel interval and set scrollbar to element position
            if (windowPosition <= targetOffset) {
                clearInterval(counter);
                window.scrollTo(0, targetOffset);
            }
        } else {
            // from top to bottom
            window.scrollTo(0, windowPosition);
            windowPosition += speed;

            // scroll until scrollbar is lower than element, cancel interval and set scrollbar to element position
            if (windowPosition >= targetOffset) {
                clearInterval(counter);
                window.scrollTo(0, targetOffset);
            }
        }

    }, 1);
}

function activeInput(){
    let container = this.parentElement;
    container.classList.add('active');
}

function checkInput(){
    let container = this.parentElement;
    if(this.value == ''){
        container.classList.remove('active');
    }
}
