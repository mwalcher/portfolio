'use strict';

import { Validation, ValidationConfig, ValidationLang } from 'bunnyjs/src/Validation';
ValidationConfig.classInputGroup = 'input-container';
ValidationConfig.classInputGroupError = 'error';
ValidationConfig.classError = 'error-message';
ValidationLang.required = '{label} is required';
ValidationLang.email = '{label} should be a valid e-mail address';

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
