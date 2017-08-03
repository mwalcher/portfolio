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
    'tab-content' => [
        'skills' => [
            'title' => 'Skills',
            'list' => [
                'html-css-js' => [
                    'label' => 'HTML CSS JavaScript',
                    'icon' => 'html-css-js'
                ],
                'sass' => [
                    'label' => 'Sass',
                    'icon' => 'sass'
                ],
                'ajax-json' => [
                    'label' => 'AJAX JSON',
                    'icon' => 'ajax-json'
                ],
                'php-mysql' => [
                    'label' => 'PHP MySQL',
                    'icon' => 'php-mysql'
                ]
            ]
        ],
        'tools' => [
            'title' => 'Tools',
            'list' => [
                'git' => [
                    'label' => 'Git',
                    'icon' => 'git'
                ],
                'laravel' => [
                    'label' => 'Laravel',
                    'icon' => 'laravel'
                ],
                'codeigniter' => [
                    'label' => 'Codeigniter',
                    'icon' => 'codeigniter'
                ],
                'concrete' => [
                    'label' => 'concrete5',
                    'icon' => 'concrete'
                ]
            ]
        ]
    ],
    'main-content' => [
        'id' => 'work',
        'main-title' => 'Projects'
    ]
];
