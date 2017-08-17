'use strict';

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
        if(target.dataset.toggleParent == trigger.dataset.toggleParent){
            triggers.push(trigger);
        }
    });

    toggleContentList.forEach(function(content){
        if(target.dataset.toggleParent == content.dataset.toggleParent){
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
}
