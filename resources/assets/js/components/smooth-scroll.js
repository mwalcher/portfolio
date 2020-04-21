'use strict';

const headerOffset = 80;
const headerBreakpoint = 740;

export default function({
    trigger = requiredField('Trigger'),
    offset = 0,
    speed = 10
} = {}) {
    smoothScroll(trigger, offset, speed);
}

function smoothScroll(trigger, offset, speed) {
    let windowPosition = window.pageYOffset;

    let targetID;
    if (trigger.href) {
        targetID = trigger.href.split('#')[1];
    } else if (trigger.dataset.parent) {
        targetID = trigger.dataset.parent;
    }

    let target = document.getElementById(targetID);

    if (!target) {
        return;
    }

    let targetOffset = target.offsetTop - offset;

    if (!window.matchMedia(`(min-width: ${headerBreakpoint}px)`).matches) {
        targetOffset = targetOffset - headerOffset;
    }

    if (target.parentNode.classList.contains('section')) {
        let parent = target.parentNode;
        targetOffset = targetOffset + parent.offsetTop;
    }

    if (target.classList.contains('main-content')) {
        let tabContent = document.querySelector('.tab-content');
        let tabContentOffset = tabContent.offsetHeight / 2;
        targetOffset = targetOffset + tabContentOffset;
    }

    let counter = setInterval(() => {
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

function requiredField(field) {
    throw new Error(`[${field}] is required`);
}
