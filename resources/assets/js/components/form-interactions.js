'use strict';

import {
    Validation,
    ValidationConfig,
    ValidationLang
} from 'bunnyjs/src/Validation';
ValidationConfig.classInputGroup = 'input-container';
ValidationConfig.classInputGroupError = 'error';
ValidationConfig.classError = 'error-message';
ValidationLang.required = '{label} is required';
ValidationLang.email = '{label} is not a valid email';

export default function({
    forms = [],
    inputs = [],
    activeClass = 'active'
} = {}) {
    forms.forEach(form => {
        Validation.init(form, true);

        if (form.classList.contains('recaptcha')) {
            form.querySelector('[type="submit"]').addEventListener(
                'click',
                e => {
                    e.preventDefault();
                    executeRecaptcha(form);
                }
            );
        }
    });

    inputs.forEach(input => {
        if (input.type !== 'hidden' && input.id !== 'g-recaptcha-response') {
            const parent = input.parentElement;
            window.addEventListener('load', () =>
                checkInput(input, parent, activeClass)
            );
            input.addEventListener('focus', () =>
                activeInput(parent, activeClass)
            );
            input.addEventListener('focusout', () =>
                checkInput(input, parent, activeClass)
            );
        }
    });
}

function activeInput(container, className) {
    container.classList.add(className);
}

function checkInput(element, container, className) {
    if (!container.classList.contains(className) && element.value !== '') {
        activeInput(container, className);
    } else if (
        container.classList.contains(className) &&
		element.value === ''
    ) {
        container.classList.remove(className);
    }
}

function executeRecaptcha(form) {
    Validation.validateSection(form).then(result => {
        if (result === true) {
            grecaptcha.execute(); // eslint-disable-line no-undef
        } else {
            Validation.focusInput(result[0]);
        }
    });
}
