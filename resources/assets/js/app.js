'use strict';

NodeList.prototype.forEach = NodeList.prototype.forEach || Array.prototype.forEach;

document.addEventListener('readystatechange', function(){
    if(document.readyState === 'complete'){
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
