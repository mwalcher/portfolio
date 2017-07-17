'use strict';

export default function({
    inputs = []
} = {}) {

    inputs.forEach(function(input){
        input.addEventListener('focus', activeInput);
        input.addEventListener('focusout', checkInput);
    });
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
