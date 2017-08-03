'use strict';

const activeClass = 'active';

export default function({
    triggers = []
} = {}) {

    triggers.forEach(function(trigger){
        trigger.addEventListener('click', function(){
            toggleActive(trigger, triggers);
        });
    });
}

function toggleActive(target, triggers){
    triggers.forEach(function(trigger){
        trigger.classList.remove(activeClass);
    });
    target.classList.add(activeClass);

    let toggleContent = document.querySelectorAll('[data-toggle-content]');
    toggleContent.forEach(function(content){
        if(content.dataset.toggleContent == target.dataset.toggle){
            content.classList.add(activeClass);
        }else{
            content.classList.remove(activeClass);
        }
    });
}
