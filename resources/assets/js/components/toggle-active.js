'use strict';

import smoothScroll from './smooth-scroll';

const activeClass = 'active';

export default function({
    triggers = [],
    toggleContent = []
} = {}) {

    triggers.forEach(function(trigger){
        trigger.addEventListener('click', function(){
            toggleActive(trigger, triggers, toggleContent);
        });
    });
}

function toggleActive(target, triggerList, toggleContentList){
    let triggers = [];
    let toggleContent = [];

    triggerList.forEach(function(trigger){
        if(target.dataset.parent == trigger.dataset.parent){
            triggers.push(trigger);
        }
    });

    toggleContentList.forEach(function(content){
        if(target.dataset.parent == content.dataset.parent){
            toggleContent.push(content);
        }
    });

    triggers.forEach(function(trigger){
        trigger.classList.remove(activeClass);
    });
    target.classList.add(activeClass);

    toggleContent.forEach(function(content){
        if(content.dataset.toggleContent == target.dataset.toggle){
            content.classList.add(activeClass);
        }else{
            content.classList.remove(activeClass);
        }
    });

    if(target.dataset.scroll == 'true'){
        smoothScroll({
            trigger: target
        });
    }
}
