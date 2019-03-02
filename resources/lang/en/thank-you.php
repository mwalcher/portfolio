<?php

return [
    'no-index' => 'true',
    'title' => 'Thank You / '.__('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => __('meta.image'),
    'background' => __('meta.background'),
    'hero' => [
        'logo' => [
            'src' => asset('images').'/mwalcher-logo-light.svg',
            'alt' => 'mwalcher Logo',
            'link' => __('global.home')
        ],
        'main-title' => 'Thank you!',
        'content' => 'I appreciate you taking the time to reach out to me. I will be sure to respond to your message as soon as possible.',
        'button' => __('global.home'),
        'contact-links' => __('global.contact-links')
    ]
];
