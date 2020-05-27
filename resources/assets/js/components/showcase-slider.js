'use strict';

import Flickity from 'flickity';
import debounce from 'lodash/debounce';

export default function ({ sliders = requiredField('Showcase Slider') } = {}) {
    sliders.forEach(initFlickity);

    window.addEventListener(
        'resize',
        debounce(() => sliders.forEach(initFlickity), 250)
    );
}

function initFlickity(target) {
    let options = {
        prevNextButtons: true,
        pageDots: false,
        draggable: true,
        adaptiveHeight: true,
        wrapAround: true
    };

    let slider = new Flickity(target, options);

    slider.resize();
}

function requiredField(field) {
    throw new Error(`[${field}] is required`);
}
