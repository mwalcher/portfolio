'use strict';

import smoothScroll from './smooth-scroll';

export default function({
    triggers = [],
    toggleContent = [],
    activeClass = 'active'
} = {}) {

    triggers.forEach((trigger) => {
        trigger.addEventListener('click', () => toggleActive(trigger, triggers, toggleContent, activeClass));
    });
}

function toggleActive(target, triggerList, toggleContentList, className){
    let triggers = [];
    let toggleContent = [];

    triggerList.forEach((trigger) => {
        if(target.dataset.parent === trigger.dataset.parent){
            triggers.push(trigger);
        }
    });

    toggleContentList.forEach((content) => {
        if(target.dataset.parent === content.dataset.parent){
            toggleContent.push(content);
        }
    });

    triggers.forEach((trigger) => trigger.classList.remove(className));
    target.classList.add(className);

    toggleContent.forEach((content) => {
        if(content.dataset.toggleContent === target.dataset.toggle){
            content.classList.add(className);
        }else{
            content.classList.remove(className);
        }
    });

    if(target.dataset.scroll === 'true'){
        smoothScroll({
            trigger: target,
            offset: 24
        });
    }
}
