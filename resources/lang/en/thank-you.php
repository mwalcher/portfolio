<?php

return [
    'title' => 'Thank You / '.__('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => [
        'src' => __('meta.image.src'),
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('meta.background'),
    'hero' => [
        'logo' => [
            'src' => asset('images').'/mwalcher-logo-light.svg',
            'alt' => 'mwalcher Logo'
        ],
        'main-title' => 'Thank you!',
        'content' => 'I appreciate you taking the time to reach out to me. I will be sure to respond to your message as soon as possible.',
        'button' => __('global.home')
    ]
];
