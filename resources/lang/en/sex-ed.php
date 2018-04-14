<?php

return [
    'title' => __('global.projects.sex-ed.name').' / '.__('meta.title'),
    'description' => 'A fictional web service to educate teens about sex. Built by Matthew Walcher.',
    'meta-image' => [
        'src' => asset('images').'/sex-ed-meta-image.png',
        'width' => __('meta.image.width'),
        'height' => __('meta.image.height')
    ],
    'background' => __('global.projects.sex-ed.image'),
    'navigation' => [
        'home' => [
            'text' => __('projects.navigation.home.text'),
            'title' => __('projects.navigation.home.title'),
            'link' => __('projects.navigation.home.link'),
            'icon' => __('projects.navigation.home.icon')
        ],
        'overview' => [
            'text' => __('projects.navigation.overview.text'),
            'title' => __('projects.navigation.overview.title').__('global.projects.sex-ed.name'),
            'link' => __('projects.navigation.overview.link'),
            'icon' => __('projects.navigation.overview.icon')
        ],
        'preview' => [
            'text' => __('projects.navigation.preview.text'),
            'title' => __('projects.navigation.preview.title').__('global.projects.sex-ed.name'),
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
        'main-title' => __('global.projects.sex-ed.name'),
        'content' => __('global.projects.sex-ed.description')
    ],
    'tab-content' => [
        'about' => [
            'title' => __('projects.tab-content.about.title').__('global.projects.sex-ed.name')
        ],
        'work' => [
            'title' => __('projects.tab-content.work.title')
        ]
    ],
    'main-content' => [
        'id' => __('projects.main-content.id'),
        'components' => [
            'option-list' => [
                'title' => __('projects.main-content.option-list-title'),
                'list' => [
                    'musicbook' => __('global.projects.musicbook'),
                    'smart-fridge' => __('global.projects.smart-fridge'),
                    'truckladders' => __('global.projects.truckladders')
                ],
                'toggle' => false
            ]
        ]
    ]
];
