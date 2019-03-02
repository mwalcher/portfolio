<?php

return [
    'no-index' => 'true',
    'title' => 'Page Not Found / '.__('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => __('meta.image'),
    'background' => __('meta.background'),
    'hero' => [
        'logo' => [
            'src' => asset('images').'/mwalcher-logo-light.svg',
            'alt' => 'mwalcher Logo',
            'link' => __('global.home')
        ],
        'main-title' => 'No worries!',
        'content' => 'Not all those who wander are lost.',
        'button' => __('global.home'),
        'contact-links' => __('global.contact-links')
    ]
];
