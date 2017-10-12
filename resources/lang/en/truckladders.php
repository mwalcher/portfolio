<?php

return [
    'title' => __('meta.title').'truckladders',
    'description' => 'A marketing website for a new safety product. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/truckladders-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.truckladders.image'),
    'navigation' => [
        'home' => [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of Truckladders',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of Truckladders',
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
        'main-title' => __('global.projects.truckladders.name'),
        'content' => __('global.projects.truckladders.description')
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
        'main-title' => 'Preview',
        'option-list' => [
            'musicbook' => __('global.projects.musicbook'),
            'sex-ed' => __('global.projects.sex-ed'),
            'smart-fridge' => __('global.projects.smart-fridge')
        ],
        'option-list-title' => 'Other Projects'
    ]
];
