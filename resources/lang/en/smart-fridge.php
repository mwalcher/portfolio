<?php

return [
    'title' => 'mwalcher / smart-fridge',
    'description' => 'A fictional touchscreen interface for a fridge. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/smart-fridge-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => asset('images').'/smart-fridge-hero.jpg',
    'navigation' => [
        [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'fa-user'
        ],
        [
            'text' => 'Overview',
            'title' => 'Overview of Smart Fridge',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        [
            'text' => 'Preview',
            'title' => 'Preview of Smart Fridge',
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
        'main-title' => 'Smart Fridge',
        'content' => 'A fictional touchscreen interface for a fridge'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About Smart Fridge'
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
