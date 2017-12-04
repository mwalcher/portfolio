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
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.smart-fridge.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.smart-fridge.name'),
            'link' => __('projects.navigation.preview.link'),
            'icon' => __('projects.navigation.preview.icon')
        ],
        'contact' => [
            'text' => __('projects.navigation.contact.text'),
            'title' => __('projects.navigation.contact.title'),
            'link' => __('projects.navigation.contact.link'),
            'icon' => __('projects.navigation.contact.icon')
        ]
    ],
    'hero' => [
        'id' => __('projects.hero.id'),
        'main-title' => __('global.projects.smart-fridge.name'),
        'content' => __('global.projects.smart-fridge.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.smart-fridge.name')
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title')
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'main-title' => __('projects.main-content.main-title'),
        'components' => [
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'musicbook' => __('global.projects.musicbook'),
                    'sex-ed' => __('global.projects.sex-ed'),
                    'truckladders' => __('global.projects.truckladders')
                ],
                'toggle' => false
            ]
        ]
    ]
];
