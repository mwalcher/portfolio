<?php

return [
    'navigation' => [
        'home' => [
            'text' => __('global.home.name'),
            'title' => __('global.home.title'),
            'link' => __('global.home.link'),
            'icon' => 'hidden'
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of ',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of ',
            'link' => '#preview',
            'icon' => 'fa-mobile'
        ],
        'contact' => [
            'text' => __('footer.navigation.text'),
            'title' => __('footer.navigation.title'),
            'link' => __('footer.navigation.link'),
            'icon' => __('footer.navigation.icon')
        ]
    ],
    'hero' => [
        'id' => 'overview'
    ],
    'tab-content' => [
        'about' => [
            'title' => 'About '
        ],
        'work' => [
            'title' => 'What I Did'
        ]
    ],
    'main-content' => [
        'id' => 'preview',
        'main-title' => 'Preview',
        'preview-slider-cta' => 'View ',
        'option-list-title' => 'Other Projects'
    ]
];
