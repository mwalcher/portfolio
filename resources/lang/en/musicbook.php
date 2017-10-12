<?php

return [
    'title' => __('meta.title').'musicbook',
    'description' => 'A fictional social media website for music. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/musicbook-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.musicbook.image'),
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
        'main-title' => __('global.projects.musicbook.name'),
        'content' => __('global.projects.musicbook.description')
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
        'main-title' => 'Preview',
        'option-list' => [
            'sex-ed' => __('global.projects.sex-ed'),
            'smart-fridge' => __('global.projects.smart-fridge'),
            'truckladders' => __('global.projects.truckladders')
        ],
        'option-list-title' => 'Other Projects'
    ]
];
