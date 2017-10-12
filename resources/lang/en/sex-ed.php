<?php

return [
    'title' => __('meta.title').'sex-ed',
    'description' => 'A fictional web service to educate teens about sex. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/sex-ed-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.sex-ed.image'),
    'navigation' => [
        'home' => [
            'text' => 'Home',
            'title' => 'Homepage',
            'link' => route('home'),
            'icon' => 'hidden'
        ],
        'overview' => [
            'text' => 'Overview',
            'title' => 'Overview of SEX-ED',
            'link' => '#overview',
            'icon' => 'fa-folder-open'
        ],
        'preview' => [
            'text' => 'Preview',
            'title' => 'Preview of SEX-ED',
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
        'main-title' => __('global.projects.sex-ed.name'),
        'content' => __('global.projects.sex-ed.description')
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
        'main-title' => 'Preview',
        'option-list' => [
            'musicbook' => __('global.projects.musicbook'),
            'smart-fridge' => __('global.projects.smart-fridge'),
            'truckladders' => __('global.projects.truckladders')
        ],
        'option-list-title' => 'Other Projects'
    ]
];
