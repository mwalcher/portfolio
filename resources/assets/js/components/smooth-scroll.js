'use strict';

const page = document.querySelector('html');
const headerOffset = 80;
const headerBreakpoint = 740;

export default function({
    trigger = requiredField('Trigger'),
    speed = 10,
    windowPosition = window.pageYOffset,
} = {}) {
    
    smoothScroll(trigger, speed, windowPosition);
}

function smoothScroll(trigger, speed, windowPosition){
    let targetID = trigger.href.split('#')[1];
    let target = document.getElementById(targetID);
    let targetOffset = target.offsetTop;

    if(page.classList.contains('show-navigation')
       && !window.matchMedia(`(min-width: ${headerBreakpoint}px)`).matches){
        targetOffset = targetOffset - headerOffset;
    }

    let counter = setInterval(function() {
        windowPosition;

        if (windowPosition > targetOffset) {
            // from bottom to top
            window.scrollTo(0, windowPosition);
            windowPosition -= speed;

            // scrolling until targetOffset is higher than scrollbar position
            // and cancel interval and set scrollbar to element position
            if (windowPosition <= targetOffset) {
                clearInterval(counter);
                window.scrollTo(0, targetOffset);
            }
        } else {
            // from top to bottom
            window.scrollTo(0, windowPosition);
            windowPosition += speed;

            // scroll until scrollbar is lower than element, cancel interval
            // and set scrollbar to element position
            if (windowPosition >= targetOffset) {
                clearInterval(counter);
                window.scrollTo(0, targetOffset);
            }
        }

    }, 1);
}

function requiredField(field){
    throw new Error(`[${field}] is required`);
}
