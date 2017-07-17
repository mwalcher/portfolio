<?php

return [
    'title' => __('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => [
        'src' => __('meta.image.src'),
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'navigation' => [
        [
            'text' => 'About',
            'title' => 'About Matthew Walcher',
            'link' => '#about',
            'icon' => 'fa-user'
        ],
        [
            'text' => 'Work',
            'title' => 'Matthew Walcher\'s Work',
            'link' => '#work',
            'icon' => 'fa-desktop'
        ],
        [
            'text' => 'Contact',
            'title' => 'Contact Matthew Walcher',
            'link' => '#contact',
            'icon' => 'fa-envelope'
        ]
    ],
    'background' => asset('images').'/hero-home.jpg',
    'hero' => [
        'id' => 'about',
        'main-title' => 'Matthew Walcher',
        'sub-title' => 'Front-end Web Developer',
        'content' => 'I am a detail oriented problem solver who is determined to find a solution even if it does not come easily.'
    ],
    'main-content' => [
        'id' => 'work',
        'main-title' => 'Projects'
    ]
];
