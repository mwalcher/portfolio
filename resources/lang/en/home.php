<?php

return [
    'title' => __('meta.title'),
    'description' => __('meta.description'),
    'meta-image' => [
        'src' => __('meta.image.src'),
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('meta.background'),
    'navigation' => [
        'about' => [
            'text' => 'About',
            'title' => 'About Matthew Walcher',
            'link' => '#about',
            'icon' => 'fa-user'
        ],
        'work' => [
            'text' => 'Work',
            'title' => 'Matthew Walcher\'s Work',
            'link' => '#work',
            'icon' => 'fa-desktop'
        ],
        'contact' => [
            'text' => __('footer.navigation.text'),
            'title' => __('footer.navigation.title'),
            'link' => __('footer.navigation.link'),
            'icon' => __('footer.navigation.icon')
        ]
    ],
    'hero' => [
        'id' => 'about',
        'main-title' => 'Matthew Walcher',
        'sub-title' => 'Front-end Web Developer',
        'content' => 'I am a detail oriented problem solver who is determined to find a solution even if it does not come easily.'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About Me',
            'content' => 'This is test content with a <a href="#">link</a>.'
        ],
        'tools' => [
            'title' => 'What I Use',
            'list' => [
                'git' => [
                    'label' => 'Git',
                    'link' => 'https://git-scm.com/'
                ],
                'laravel' => [
                    'label' => 'Laravel',
                    'link' => 'https://laravel.com/'
                ],
                'react' => [
                    'label' => 'React',
                    'link' => 'https://reactjs.org/'
                ],
                'vue-js' => [
                    'label' => 'Vue.js',
                    'link' => 'https://vuejs.org/'
                ]
            ]
        ]
    ],
    'main-content' => [
        'id' => 'work',
        'main-title' => 'Projects',
        'components' => [
            'featured-content' => [
                'list' => __('global.projects'),
                'cta' => 'View Project'
            ]
        ]
    ]
];
