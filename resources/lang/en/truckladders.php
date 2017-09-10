<?php

return [
    'title' => 'mwalcher / truckladders',
    'description' => 'A marketing website for a new safety product. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/truckladders-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => asset('images').'/truckladders-hero.jpg',
    'navigation' => [
        [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        [
            'text' => 'Overview',
            'title' => 'Overview of Truckladders',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        [
            'text' => 'Preview',
            'title' => 'Preview of Truckladders',
            'link' => '#preview',
            'icon' => 'fa-mobile'
        ],
        [
            'text' => 'Contact',
            'title' => 'Contact Matthew Walcher',
            'link' => '#contact',
            'icon' => 'fa-envelope'
        ]
    ],
    'hero' => [
        'id' => 'overview',
        'main-title' => 'Truckladders',
        'content' => 'A marketing website for a new safety product'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About Truckladders'
        ],
        'work' => [
            'title' => 'What I Did'
        ]
    ],
    'main-content' => [
        'id' => 'preview',
        'main-title' => 'Preview'
    ]
];
