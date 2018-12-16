'use strict';

import { Validation, ValidationConfig } from 'bunnyjs/src/Validation';
ValidationConfig.classInputGroup = 'input-container';
ValidationConfig.classInputGroupError = 'error';

export default function({
    forms = [],
    inputs = []
} = {}) {

    forms.forEach((form) => {
        Validation.init(form, true);
    });

    inputs.forEach((input) => {
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
