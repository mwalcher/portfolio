<?php

return [
    'title' => __('meta.title').'smart-fridge',
    'description' => 'A fictional touchscreen interface for a fridge. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/smart-fridge-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.smart-fridge.image'),
    'navigation' => [
        'home' => [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of Smart Fridge',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of Smart Fridge',
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
        'main-title' => __('global.projects.smart-fridge.name'),
        'content' => __('global.projects.smart-fridge.description')
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
        'main-title' => 'Preview',
        'option-list' => [
            'musicbook' => __('global.projects.musicbook'),
            'sex-ed' => __('global.projects.sex-ed'),
            'truckladders' => __('global.projects.truckladders')
        ],
        'option-list-title' => 'Other Projects'
    ]
];
