'use strict';

import { Validation, ValidationConfig, ValidationLang } from 'bunnyjs/src/Validation';
ValidationConfig.classInputGroup = 'input-container';
ValidationConfig.classInputGroupError = 'error';
ValidationConfig.classError = 'error-message';
ValidationLang.required = '{label} is required';
ValidationLang.email = '{label} should be a valid e-mail address';

export default function({
    forms = [],
    inputs = [],
    activeClass = 'active'
} = {}) {

    forms.forEach((form) => Validation.init(form, true));

    inputs.forEach((input) => {
        input.addEventListener('focus', () => activeInput(input, activeClass));
        input.addEventListener('focusout', () => checkInput(input, activeClass));
    });
}

function activeInput(element, className){
    const container = element.parentElement;
    container.classList.add(className);
}

function checkInput(element, className){
    const container = element.parentElement;
    if(element.value === ''){
        container.classList.remove(className);
    }
}
