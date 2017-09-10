<?php

return [
    'title' => __('meta.title').'musicbook',
    'description' => 'A fictional social media website for music. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/musicbook-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => asset('images').'/musicbook-hero.jpg',
    'navigation' => [
        'home' => [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of Musicbook',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of Musicbook',
            'link' => '#preview',
            'icon' => 'fa-mobile'
        ],
        'contact' => [
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
