<?php

return [
    'title' => 'mwalcher / musicbook',
    'description' => 'A fictional social media website for music made by Matthew Walcher.',
    'meta-image' => [
        'src' => __('meta.image.src'),
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => asset('images').'/musicbook-hero.jpg',
    'navigation' => [
        [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'fa-user'
        ],
        [
            'text' => 'Overview',
            'title' => 'Overview of Musicbook',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        [
            'text' => 'Preview',
            'title' => 'Preview of Musicbook',
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
        'main-title' => 'Musicbook',
        'content' => 'A fictional social media website for music'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About Musicbook'
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
