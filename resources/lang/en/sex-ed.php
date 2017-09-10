<?php

return [
    'title' => 'mwalcher / sex-ed',
    'description' => 'A fictional web service to educate teens about sex. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/sex-ed-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => asset('images').'/sex-ed-hero.jpg',
    'navigation' => [
        [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        [
            'text' => 'Overview',
            'title' => 'Overview of SEX-ED',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        [
            'text' => 'Preview',
            'title' => 'Preview of SEX-ED',
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
        'main-title' => 'SEX-ED',
        'content' => 'A fictional web service to educate teens about sex'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About SEX-ED'
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
